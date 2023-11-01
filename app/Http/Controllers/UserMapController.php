<?php

namespace App\Http\Controllers;

use App\Models\PollutionReport;
use Illuminate\Http\Request;

class UserMapController extends Controller
{
    public function create(request $request)
    {
        $lat = $request->lat;
        $lng = $request->lng;
        $user = auth()->user();
        if ($user){
            $pollutionReports = PollutionReport::where('lat', '>=', $lat - 0.005)
                ->where('lat', '<=', $lat + 0.005)
                ->where('lng', '>=', $lng - 0.005)
                ->where('lng', '<=', $lng + 0.005)
                ->get();
            return view('map',['lat' => $lat, 'lng' => $lng, 'pollutionReports' => $pollutionReports]);
        }else {
            return view('map', ['lat' => $lat, 'lng' => $lng]);
        }
    }
}
