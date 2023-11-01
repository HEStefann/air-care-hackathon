<?php

namespace App\Http\Controllers;

use App\Models\PollutionReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use NunoMaduro\Collision\Adapters\Laravel\Inspector;

class AdminPanelController extends Controller
{
    // index with all polution reports
    public function adminPanel()
    {
        $inspectors = User::where('role', 'inspector')->get();
        if ($inspectors->count() == 0) {
            $inspectors = [];
        }
        $reports = PollutionReport::limit(10)->get();
        $assignedInspectors = $reports->whereNotNull('inspector_id');
        $notAssignedInspectors = $reports->whereNull('inspector_id');
        return view('adminPanel', compact('assignedInspectors', 'notAssignedInspectors', 'inspectors'));
    }
    // createInspector
    public function createInspector(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);
        $user->save();
        return redirect()->route('adminPanel')->with('success', 'Inspector created successfully');
    }
    // assignInspector
    public function assignInspector(Request $request)
    {
        $report = PollutionReport::find($request->report_id);
        $report->inspector_id = $request->inspector_id;
        $report->day_appended = date('Y-m-d');
        $report->case_status = 'on field';
        $report->status = 'in progress';
        $report->save();

        return redirect()->route('adminPanel')->with('success', 'Inspector assigned successfully');
    }
    public function generatePdf(Request $request)
    {
        $report = PollutionReport::find($request->report_id);
    
    }
}
