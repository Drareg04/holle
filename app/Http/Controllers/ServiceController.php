<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    /**
     * Display the specified service.
     */
    public function show(String $username, string $slug)
    {
        $service = Service::where("slug", $slug)->first();


        return view("services.show", ["service" => $service]);
    }

    /**
     * Display services by seller.
     */
    public function indexSeller(String $username)
    {
        $user = User::where("username", $username)->first();

        if ($user->is_seller == false) {
            abort(404);
        }

        $services = $user->services()->get();


        return view("services.seller", ["services" => $services]);
    }

    /**
     * search
     */
    public function search(Request $request)
    {
        // $query = $request->query();

        // if has as FILLED q parameter
        if ($request->filled('q')) {
            // results get automatically ordered based on score, beautifull
            $services = Service::whereFullText(['title', 'description'], $request->q)->get();
        }
        // if autocompleate parameter, do that
        elseif ($request->has('autocomplete')) {
            return ("TODO, autocomplete");
        }
        // if no parameters, return all in cronological order
        else {
            $services = Service::orderBy('created_at', "desc")->get();
        }

        // return
        return view("services.search", ["services" => $services]);
    }



    // Seller / admin functions
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where("seller_id", Auth::id())->get();
        return view("seller.services.index", ["services" => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("seller.services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ["string", "required"],
        ]);

        $service = new Service;
        $service->title = $request->title;
        $service->slug = "";
        $service->seller_id = Auth::id();
        $service->price = 0;
        $service->save();
        $service->slug = Str::slug($request->title, '-') . "-" . $service->id;
        $service->save();

        Storage::disk('public')->makeDirectory("/services/" . $service->slug);

        return redirect("/seller/services/" . $service->slug);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        // TODO, make sure they OWN the service
        $service = Service::where("slug", $slug)->first();


        return view("seller.services.show", ["service" => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => ["string", "required"],
            'description' => ["string", "required"],
            // TODO, fill
        ]);


        $service = Service::where("slug", $slug)->first();

        $service->title = $request->title;
        $service->description = $request->description;
        $service->price = $request->price;
        // $service->is_published = 
        $service->slug = Str::slug($request->title, '-') . "-" . $service->id;
        $service->save();

        return redirect("/seller/services/" . $service->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
