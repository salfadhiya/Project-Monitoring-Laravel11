<?php

namespace App\Http\Controllers;
use App\Models\Proyek;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $proyek = Proyek::findOrFail($id);
        $delivery = Delivery::where('id_proyek', $id)->first();
        return view("home.proyek.delivery", compact("proyek", "delivery"));
    }

    public function del()
    {
        $delivery = delivery::all();
        return view("home.delivery.index", compact("delivery"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
