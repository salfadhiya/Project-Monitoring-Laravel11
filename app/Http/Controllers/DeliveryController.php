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
        $delivery = Delivery::where('id_proyek', $id)->get();
        return view("home.proyek.delivery", compact("proyek", "delivery"));
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
        $request->validate([
            'id_proyek'   => 'nullable|integer',
            'nama'        => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Delivery::create([
            "id_proyek"   => $request->id_proyek,
            "nama"        => $request->nama,
        ]);

        // Redirect kembali ke halaman proyek dengan pesan sukses
        return redirect('/proyek/' . $request->id_proyek . '/delivery')->with('success', 'Delivery berhasil ditambahkan!');
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
        $delivery = Delivery::findOrFail($id);
        $id_proyek = $delivery->id_proyek;
        $delivery->delete();

        return redirect('/proyek/' . $id_proyek . '/delivery')->with('success', 'Delivery berhasil dihapus!');
    }
}
