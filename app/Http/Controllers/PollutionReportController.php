<?php

namespace App\Http\Controllers;

use App\Models\PollutionReport;
use Illuminate\Http\Request;

class PollutionReportController extends Controller
{
    public function create(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'category' => 'required|in:smoke,smell,other',
        //     'image' => 'required',
        //     'description' => 'required|max:250',
        //     'date' => 'required|date',
        //     'lat' => 'required|numeric',
        //     'lng' => 'required|numeric',
        //     'address' => 'required|max:250',
        //     'priority' => 'required|in:low,medium,high,very high',
        //     'municipality' => 'required|max:250',
        // ]);

        // Create a new pollution report
        dd($request->all());
        $report = PollutionReport::create($request->all());

        return response()->json($report, 201);
    }

    // public function update(Request $request, PollutionReport $report)
    // {
    //     // Check if the user is the owner of the report or has the appropriate permissions
    //     $user = auth()->user();
        
    //     if ($user->id !== $report->user_id) {
    //         return response()->json(['error' => 'You do not have permission to update this report.'], 403);
    //     }

    //     // Update the report
    //     $report->update($request->all());

    //     return response()->json($report, 200);
    // }

    public function confirm(PollutionReport $report)
    {
        // Check if the user is authorized to confirm the report (e.g., an admin or inspector)
        $user = auth()->user();
        
        if (!$user->isAdmin() && !$user->isInspector()) {
            return response()->json(['error' => 'You do not have permission to confirm reports.'], 403);
        }

        // Update the report to reflect that it has been confirmed
        $report->update(['status' => 'awaiting']);

        return response()->json($report, 200);
    }

    public function submitToAPI(PollutionReport $report)
    {
        // Check if the user is authorized to submit the report to an external API
        $user = auth()->user();

        if (!$user->isAdmin()) {
            return response()->json(['error' => 'You do not have permission to submit reports to an external API.'], 403);
        }

        // Prepare the report data for submission to the API
        $reportData = [
            'category' => $report->category,
            'description' => $report->description,
            'date' => $report->date,
            'location' => [
                'lat' => $report->lat,
                'lng' => $report->lng,
                'address' => $report->address,
            ],
            'priority' => $report->priority,
            'municipality' => $report->municipality,
        ];

        // Submit the report data to an external API (adjust the API endpoint as needed)
        $response = Http::post('https://example.com/api/submit-report', $reportData);

        // Handle the API response, for example:
        if ($response->successful()) {
            // Report successfully submitted
            return response()->json(['message' => 'Report submitted to API successfully'], 200);
        } else {
            // Handle API submission error
            return response()->json(['error' => 'Failed to submit the report to the API'], 500);
        }
    }
}
