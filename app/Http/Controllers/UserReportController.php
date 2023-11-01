<?php

namespace App\Http\Controllers;

use App\Models\PollutionReport;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserReportController extends Controller
{
    public function create(request $request)
    {
        $lat = $request->lat;
        $lng = $request->lng;
        return view('reportForm', ['lat' => $lat, 'lng' => $lng]);
    }
    public function createAnonymus()
    {
        return view('reportAnonymus');
    }
    
    public function store(request $request)
    {
        $user = auth()->user();
        $url = "https://geocode.maps.co/reverse?lat={$request->lat}&lon={$request->lng}";
        // $url = "https://geocode.maps.co/reverse?lat={$lat}&lon={$lng}";
        $response = Http::get($url);
        $data = $response->json();
        $road = $data["address"]["road"] ?? '';
        $suburb = $data['address']['suburb'] ?? '';
        $number = $data['address']['house_number'] ?? '';
        $city = $data['address']['city'] ?? '';
        $postcode = $data['address']['postcode'] ?? '';

        $airCareUrl = "https://api.getaircare.com/v1/current?requestType=aqi&lat={$request->lat}&lng={$request->lng}&key=fba25f40732211eeab4e325096b39f47";
        $airCareResponse = Http::get($airCareUrl);
        $airCareData = $airCareResponse->json();
        // airCareData found in data level
        $pollutionLevel = $airCareData['measurements'][0]['level'];
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $pollutionReport = new PollutionReport();
        if ($user) {
            $pollutionReport->user_id = $user->id;
        }
        $pollutionReport->category = $request->source;
        $pollutionReport->type = $request->category;
        $pollutionReport->lat = $request->lat;
        $pollutionReport->lng = $request->lng;
        $pollutionReport->description = $request->userDescription;
        $pollutionReport->image = $imageName;
        $pollutionReport->date = date('Y-m-d');
        $pollutionReport->address = $road . ' ' . $number . ', ' . $suburb . ', ' . $city . ' ' . $postcode;
        $pollutionReport->municipality = $suburb;
        $pollutionReport->pollutionLevel = $pollutionLevel;
        $pollutionReport->status = $user ? 'awaiting' : 'approval';
        $pollutionReport->save();
        return redirect()->route('homePage');
    }
}
