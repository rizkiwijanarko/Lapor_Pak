<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReportController extends Controller
{
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




    public function insert_report(Request $request)
    {
        Log::info('requst', ['request' => $request->all()]);

        Report::create($request->all());

        return response()->json($request->all());
    }

    public function get_all_reports()
    {
        $reports = Report::all();
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

    public function get_ai_summary()
    {

        $question = 'apa itu javascript';

        // operasi ai nya

        $summary = 'hasil';

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
}
