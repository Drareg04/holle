<?php

namespace App\Http\Controllers;

use App\Models\CarouselImg;
use App\Models\Service;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function mainPage()
    {
        $services = Service::all();

        return view('welcome', ["services" => $services]);
    }
}
