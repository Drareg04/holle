<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarouselImg;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carouselImgs = CarouselImg::all();
        return view("admin.carousel.index", ["carouselImgs" => $carouselImgs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.carousel.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarouselImg $carouselImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarouselImg $carouselImg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarouselImg $carouselImg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarouselImg $carouselImg)
    {
        //
    }
}
