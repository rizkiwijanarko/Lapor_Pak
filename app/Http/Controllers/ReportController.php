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


    

    public function insert_report(array $data)
    {
        return Report::create($data);
    }

    public function get_all_reports()
    {
        return Report::all();
    }

    public function get_total_reports()
    {
        return Report::count();
    }

    public function get_total_not_verified_reports()
    {
        return Report::where('verified', false)->count();
    }

    public function get_total_verified_reports()
    {
        return Report::where('verified', true)->count();
    }

    public function get_total_finished_reports(): int
    {
        return Report::where('status', 'sudah_selesai')->count();

    }

    public function get_total_cancelled_reports(): int
    {
        return Report::where('status', 'ditolak')->count();
    }

    public function get_monthly_reports(): array
    {
        $reports = Report::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return $reports->map(function ($report) {
            return [
                'month' => $report->month,
                'count' => $report->count,
            ];
        })->toArray();
    }

    public function get_yearly_reports(): array
    {
        $reports = Report::selectRaw('YEAR(created_at) as year, COUNT(*) as count')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        return $reports->map(function ($report) {
            return [
                'year' => $report->year,
                'count' => $report->count,
            ];
        })->toArray();
        
    }

    public function detail_report(Report $report, $id): View
    {
        $report = Report::find($id);
        return view('admin.reports.detail', compact('report'));
    }
}