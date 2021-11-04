<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report_solicitation;
class ReportController extends Controller
{
    public function accept_report(Request $request, Report_solicitation $report){
        
        $toModify = Report_solicitation::where('id',$request->report_id);
        
        
        $toModify->update([
            'checked' => 'TRUE',
            'validated' => 'TRUE'
        ]);
        $report_solicitations = Report_solicitation::where('checked','FALSE')->get();

        return view('manage_reports.index', compact('report_solicitations'));
    }

    public function reject_report(Request $request, Report_solicitation $report){
        $toModify = Report_solicitation::where('id',$request->report_id);
        
        
        $toModify->update([
            'checked' => 'TRUE',
        ]);
        $report_solicitations = Report_solicitation::where('checked','FALSE')->get();

        return view('manage_reports.index', compact('report_solicitations'));
    }
}
