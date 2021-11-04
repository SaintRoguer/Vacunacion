<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report_solicitation;

class manageReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $report_solicitations = Report_solicitation::where('checked','FALSE')->get();

        return view('manage_reports.index', compact('report_solicitations'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //reject
    public function edit(Request $request,Report_solicitation $report)
    {   
        dd($report);

        $report->update([
            'province' => $report->province,
            'sanitary_region' => $report->sanitary_region,
            'vaccinations_or_vaccines' => $report->vaccinations_or_vaccines,
            'checked' => 'TRUE',
        ]);

        $report_solicitations = Report_solicitation::where('checked','FALSE')->get();

        return view('manage_reports.index', compact('report_solicitations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //accept
    public function update(Request $request,Report_solicitation $report )
    {   
        dd($report);
        $report->update([
            'province' => $report->province,
            'sanitary_region' => $report->sanitary_region,
            'vaccinations_or_vaccines' => $report->vaccinations_or_vaccines,
            'checked' => 'TRUE',
            'validated' => 'TRUE'
        ]);
        
        $report_solicitations = Report_solicitation::where('checked','FALSE')->get();

        return view('manage_reports.index', compact('report_solicitations'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
