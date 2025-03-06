<?php

namespace App\Http\Controllers;
use App\Models\Proyek;
use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;
class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyek = Proyek::all();
        $struktur_organisasi = strukturOrganisasi::all(); // Perbaiki nama variabel
        return view("home.proyek.index", compact("proyek", "struktur_organisasi"));
    }

    public function selengkapnya($id)
    {
        $proyek = proyek::with('struktur_organisasi')->findOrFail($id);
        return view("home.proyek.selengkapnya", compact("proyek"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.proyek.tambah", );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data yang diterima dari form
    $request->validate([
        'id_struktur'   => 'nullable|integer',
        'nama'          => 'required|string|max:255',
        'posisi'        => 'nullable|string|max:255',
        'nomor'         => 'nullable|integer',
        'durasi'        => 'nullable|string|max:255',
        'ttdkntrk'      => 'nullable|date',
        'mulai_ek'      => 'nullable|date',
        'berakhir_pb'   => 'nullable|date',
        'berakhir_k'    => 'nullable|date',
        'nilai_kb'      => 'nullable|numeric',
        'nilai_kn'      => 'nullable|numeric',
        'hpp'           => 'nullable|numeric',
        'lababruto'     => 'nullable|numeric',
        'jenisanggaran' => 'nullable|string|max:255',
        'cust'          => 'nullable|string|max:255',
        'enduser'       => 'nullable|string|max:255',
        'masa_warranty' => 'nullable|string|max:255',
    ]);

    // Simpan data ke database
    Proyek::create([
        "id_struktur"   => $request->id_struktur?? null,
        "nama"          => $request->nama,
        "posisi"        => $request->posisi?? null,
        "nomor"         => $request->nomor?? null,
        "durasi"        => $request->durasi?? null,
        "ttdkntrk"      => $request->ttdkntrk?? null,
        "mulai_ek"      => $request->mulai_ek?? null,
        "berakhir_pb"   => $request->berakhir_pb?? null,
        "berakhir_k"    => $request->berakhir_k?? null,
        "nilai_kb"      => $request->nilai_kb?? null,
        "nilai_kn"      => $request->nilai_kn?? null,
        "hpp"           => $request->hpp?? null,
        "lababruto"     => $request->lababruto?? null,
        "jenisanggaran" => $request->jenisanggaran?? null,
        "cust"          => $request->cust?? null,
        "enduser"       => $request->enduser?? null,
        "masa_warranty" => $request->masa_warranty?? null,
    ]);

    // $proyek->update([
    //     "id_struktur" => $proyek->id
    // ]);



    // Redirect kembali ke halaman proyek dengan pesan sukses
    return redirect('/proyek')->with('success', 'Proyek berhasil ditambahkan!');
}

    // public function lengkapi(string $id)
    // {
    //     $proyek = Proyek::findOrFail($id); // Pastikan data ditemukan
    //     $struktur_organisasi = StrukturOrganisasi::all(); // Ambil semua data struktur organisasi
    //     return view("home.proyek.lengkapi", compact("Proyek","StrukturOrganisasi"));
    // }

    public function edit($id)
{
    $proyek = Proyek::findOrFail($id);
    $strukturOrganisasi = StrukturOrganisasi::all();
    return view('home.proyek.lengkapi', compact('proyek', 'strukturOrganisasi'));
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


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proyek = Proyek::findOrFail($id);
        $proyek->update($request->all());

        return redirect()->route('hoem.proyek.index')->with('success', 'Data proyek berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
