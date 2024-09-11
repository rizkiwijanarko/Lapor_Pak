<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class ReportController extends Controller
{
    private function convertDateFormat($date)
    {
        if (!$date) {
            return null;
        }

        try {
            $carbonDate = Carbon::createFromFormat('d_m_Y', $date);
            return $carbonDate->format('Y-m-d');
        } catch (\Exception $e) {
            // Handle invalid date format
            return null;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }

    public function get_data(Request $request)
    {
        // Retrieve query parameters
        $category = $request->query('category');
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');
        $province = $request->query('province');

        // Convert date format from dd_mm_yyyy to yyyy-mm-dd
        $startDateFormatted = $this->convertDateFormat($startDate);
        $endDateFormatted = $this->convertDateFormat($endDate);

        // Build the query
        $query = Report::query();

        // Filter by category
        if ($category) {
            $query->where('category_event', $category);
        }

        // Filter by date range
        if ($startDateFormatted && $endDateFormatted) {
            $query->whereBetween('created_at', [$startDateFormatted, $endDateFormatted]);
        }

        // Filter by province (assuming you have a province field in your reports table)
        // If you don't have a province field, you can skip this part
        if ($province) {
            $query->where('address', 'like', '%' . $province . '%');
        }

        // Get the results
        $results = $query->get();

        return response()->json($results);
    }


    public function insert_report(Request $request)
    {
        try {
            $imagePath = null;

            if ($request->hasFile('media')) {
                $image = $request->file('media');
                $fileName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/media', $fileName); // Save image to storage/app/public/media
                $imagePath = 'storage/media/' . $fileName;
            }

            Log::info('request', ['request' => $request->all()]);

            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = substr(str_shuffle($characters), 0, 6);

            $fullAddress = $request->input('detail_address') . ', ' . $request->input('address');
            Log::info('address', ['address' => $fullAddress]);

            Report::create([
                'category_event' => $request->input('category_event'),
                'content' => $request->input('content'),
                'address' => $fullAddress,
                'status' => 'belum_diverifikasi',
                'code' => $code,
                'media' => $imagePath
            ]);

            return response()->json(['message' => 'Report inserted successfully', 'code' => $code]);
        } catch (QueryException $e) {
            Log::error('Database error', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Database error occurred.'], 500);
        } catch (\Exception $e) {
            Log::error('General error', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }

    public function get_all_reports()
    {
        $reports = Report::orderBy('created_at', 'desc')->get();

        return response()->json($reports->toArray());
    }

    public function get_total_reports()
    {
        $total = Report::count();
        return response()->json(['total' => $total]);
    }

    public function get_total_not_verified_reports()
    {
        $total = Report::where('status', 'belum_diverifikasi')->count();
        return response()->json(['total_not_verified' => $total]);
    }

    public function get_total_verified_reports()
    {
        $total = Report::where('status', 'sudah_diverifikasi')->count();
        return response()->json(['total_verified' => $total]);
    }

    public function get_total_finished_reports()
    {
        $total = Report::where('status', 'sudah_selesai')->count();
        return response()->json(['total_finished' => $total]);
    }

    public function get_total_cancelled_reports()
    {
        $total = Report::where('status', 'ditolak')->count();
        return response()->json(['total_cancelled' => $total]);
    }

    public function get_total_per_category()
    {
        $categories = [
            'agama',
            'kesehatan',
            'ketertiban_umum',
            'pekerjaan_umum_dan_penataan_ruang',
            'pemberantasan_penyalahgunaan',
            'peredaran_gelap_narkotika',
            'prekursor_narkotika',
            'kekerasan_di_satuan_pendidikan',
            'politik_dan_hukum',
            'peniadaan_mudik',
            'perhubungan',
            'perlindungan_konsumen',
            'topik_lainnya'
        ];

        $counts = [];

        try {
            foreach ($categories as $category) {
                $counts[$category] = Report::where('category_event', $category)->count();
            }

            Log::info('Counts per category', ['counts' => $counts]);

            return response()->json(['total_per_category' => $counts]);
        } catch (\Exception $e) {
            Log::error('Error retrieving counts per category', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'An error occurred while retrieving counts.'], 500);
        }
    }

    public function get_monthly_reports()
    {
        $now = Carbon::now();

        $monthlyReports = [];

        for ($i = 0; $i < 12; $i++) {
            $startOfMonth = $now->copy()->subMonths($i)->startOfMonth()->format('Y-m-d');
            $endOfMonth = $now->copy()->subMonths($i)->endOfMonth()->format('Y-m-d');

            $total = DB::table('reports')
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->count();

            $monthlyReports[] = [
                'month' => $now->copy()->subMonths($i)->format('M'),
                'total' => $total
            ];
        }

        $monthlyReports = array_reverse($monthlyReports);

        return response()->json($monthlyReports);
    }

    public function get_yearly_reports()
    {
        // Get the earliest report's creation date
        $earliestReportDate = DB::table('reports')->min('created_at');

        if (!$earliestReportDate) {
            return response()->json([]);
        }

        // Convert earliest report date to a Carbon instance
        $startYear = Carbon::parse($earliestReportDate)->year;

        // Get current year
        $currentYear = Carbon::now()->year;

        // Initialize an empty array for storing the results
        $results = [];

        // Loop through each year from the start year to the current year
        for ($year = $startYear; $year <= $currentYear; $year++) {
            $total = DB::table('reports')
                ->whereYear('created_at', $year)
                ->count();

            $results[] = [
                'year' => $year,
                'total' => $total
            ];
        }

        return response()->json($results);
    }

    public function get_top_province()
    {
        // Extract the province from the address
        $topProvinces = DB::table('reports')
            ->select(DB::raw("SUBSTRING_INDEX(SUBSTRING_INDEX(address, ',', -2), ',', 1) as province"), DB::raw('COUNT(*) as total'))
            ->groupBy('province')
            ->orderBy('total', 'desc')
            ->limit(5)
            ->get()
            ->map(function ($item) {
                return [
                    'province' => trim($item->province),
                    'total' => $item->total
                ];
            });

        // Return the result as a JSON response
        return response()->json($topProvinces);
    }

    public function detail_report(Report $report, $id)
    {
        $report = Report::find($id);
        Log::info('status', ['status', $report->created_at]);

        $date = new DateTime($report->created_at);
        $formattedDate = $date->format('j M Y');

        $report->created_at = $formattedDate;

        $report->category_event = ucwords(str_replace('_', ' ', $report->category_event));
        $report->status = ucwords(str_replace('_', ' ', $report->status));

        Log::info('status', ['status', $report->created_at]);
        Log::info('formattedDate', ['formattedDate', $formattedDate]);

        return view('admin.detail-laporan', compact('report', 'formattedDate'));
    }

    public function get_ai_summary(Request $request)
    {
        $question = $request->input('question', 'apa itu javascript');

        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                    ['role' => 'user', 'content' => $question],
                ],
                'max_tokens' => 150,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $summary = $data['choices'][0]['message']['content'];

        return response()->json(['summary' => $summary]);
    }

    public function update_status(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        $report = Report::find($id);
        $report->status = $status;
        $report->save();
    }

    public function lacak_laporan(Request $request)
    {
        $code = $request->input('code');
        $report = Report::where('code', $code)->first();

        if ($report) {
            return response()->json([
                'success' => true,
                'report' => $report
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Report not found'
            ], 404);
        }
    }

    public function test_email()
    {
        Resend::emails()->send([
            'from' => 'Acme <onboarding@resend.dev>',
            'to' => 'rasikhonly@gmail.com',
            'subject' => 'hello world',
            'html' => 'lalala',
        ]);
    }
}
