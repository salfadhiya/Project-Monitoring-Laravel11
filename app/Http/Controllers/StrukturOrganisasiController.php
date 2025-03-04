<?php

namespace App\Http\Controllers;
use App\Models\StrukturOrganisasi;
use App\Models\Workers;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $StrukturOrganisasi = StrukturOrganisasi::all();
        return view("home.turor.index", compact("StrukturOrganisasi"));
    }

    // public function indexworkers()
    // {
    //     $workers = workers::all();
    //     return view("home.turor.workers", compact("workers"));
    // }

    // public function createworkers()
    // {
    //     $workers = workers::all();
    //     return view("home.turor.tambah", compact("workers"));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.turor.tambah", );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        StrukturOrganisasi::create([
            "nama"=> $request->nama,
        ]);

        return redirect('/turor')->with('success', 'Berhasil Ditambahkan!');
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
        $StrukturOrganisasi= StrukturOrganisasi::find($id);
        $StrukturOrganisasi->delete();
        return redirect("/turor")->with("success","Berhasil dIhapus!");
    }
}
