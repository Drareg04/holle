<?php

namespace App\Http\Controllers;

use App\Models\CarouselImg;
use App\Models\Service;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function mainPage()
    {

        $carousel = CarouselImg::where("active", 1)->get();
        $services = Service::all();

        return view('welcome', ["carousel" => $carousel, "services" => $services]);
    }
}
