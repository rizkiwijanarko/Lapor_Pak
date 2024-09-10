<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $reports = Report::all();

        return response()->json($reports);

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
        $validated = $request->validate([
            'code' => 'required|string|max:255',
            'category_event' => 'required|string|max:255',
            'content' => 'required|string',
            'media' => 'nullable|string|max:255',
            'status' => 'required|in:belum diverifikasi,sudah diverifikasi,sudah selesai',
        ]);

        $report = Report::create($validated);

        return response()->json([
            'message' => 'Report created successfully',
            'data' => $report
        ], 201);

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

    /**
     * Get the total number of reports.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_total_reports()
    {
        // Hitung total laporan
        $totalReports = Report::count();

        // Kembalikan respons dengan total laporan
        return response()->json([
            'total_reports' => $totalReports
        ]);
    }

    /**
     * Get the total number of not verified reports.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_total_not_verified_reports()
    {
        // Hitung total laporan yang belum diverifikasi
        $totalNotVerifiedReports = Report::where('status', 'belum diverifikasi')->count();

        // Kembalikan respons dengan jumlah laporan yang belum diverifikasi
        return response()->json([
            'total_not_verified_reports' => $totalNotVerifiedReports
        ]);
    }

    /**
     * Get the total number of verified reports.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_total_verified_reports()
    {
        // Hitung total laporan yang sudah diverifikasi
        $totalVerifiedReports = Report::where('status', 'sudah diverifikasi')->count();

        // Kembalikan respons dengan jumlah laporan yang sudah diverifikasi
        return response()->json([
            'total_verified_reports' => $totalVerifiedReports
        ]);
    }
}
