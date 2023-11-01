<?php

namespace App\Http\Controllers;

use App\Models\PollutionReport;
use Illuminate\Http\Request;

class InspectorDashboardController extends Controller
{
    public function inspectorDashboard()
    {
        $user = auth()->user();
        $reports = $user->assignedReports()->where('case_status', '!=', 'case closed')->get();
        return view('inspectorDashboard', compact('reports'));
    }
    public function caseResolution($id)
    {
        $report = PollutionReport::find($id);
        return view('caseResolution', compact('report'));
    }
    // updateReport
    public function updateReport(Request $request)
    {
        $report = PollutionReport::find($request->report_id);
        if ($request->case_status == 'on field') {
            $status = 'in progress';
        }else {
            $status = 'completed';
        }
        $report->update([
            'inspector_description' => $request->inspector_description,
            'case_status' => $request->case_status,
            'perpetrator' => $request->perpetrator,
            'day_closed' => date('Y-m-d'),
            'status' => $status,
        ]);
        // return response json and report
        return response()->json(['message' => 'Report updated successfully','status' => 'success']);
    }
}
