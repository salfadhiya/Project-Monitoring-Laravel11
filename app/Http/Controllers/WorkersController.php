<?php

namespace App\Http\Controllers;
use App\Models\Workers;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $workers = Workers::where('id_struktur', $id)->with('struktur_organisasi')->get();
        $struktur = StrukturOrganisasi::findOrFail($id); // Ambil struktur berdasarkan ID
        return view('home.workers.index', compact('workers', 'struktur'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $workers = Workers::with('struktur_organisasi')->findOrFail($id);
        return view('home.workers.create', compact('workers'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        workers::create([
            "id_struktur"=> $request->id_struktur,
            "jabatan"=> $request->jabatan,
            "nama"=> $request->nama,
        ]);

        return redirect('/workers/' . $request->id_struktur)->with('success', 'Berhasil Ditambahkan!');
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
        $workers = Workers::findOrFail($id); // Pastikan data ditemukan
        $struktur_organisasi = StrukturOrganisasi::all(); // Ambil semua data struktur organisasi

        return view("home.workers.edit", compact("workers", "struktur_organisasi"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $worker = Workers::findOrFail($id);
        $worker->update([
            "id_struktur" => $request->id_struktur,
            "jabatan" => $request->jabatan,
            "nama" => $request->nama,
        ]);

        // Redirect ke halaman index dengan id_struktur yang benar
        return redirect('/workers/' . $worker->id_struktur)->with("success", "Berhasil DiUpdate!");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $workers = Workers::find($id);

        if (!$workers) {
            return redirect()->back()->with('error', 'Data tidak ditemukan!');
        }

        $workers->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

  

}
