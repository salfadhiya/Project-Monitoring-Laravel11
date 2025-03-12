<?php

namespace App\Http\Controllers;
use App\Models\Proyek;
use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;
class ProyekController extends Controller
{

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
        'nilai_kb'      => 'nullable|integer',
        'nilai_kn'      => 'nullable|integer',
        'hpp'           => 'nullable|numeric',
        'lababruto'     => 'nullable|numeric',
        'jenisanggaran' => 'nullable|string|max:255',
        'cust'          => 'nullable|string|max:255',
        'enduser'       => 'nullable|string|max:255',
        'masa_warranty' => 'nullable|string|max:255',
    ]);

    // Simpan data ke database
    Proyek::create([
        "id_struktur"   => $request->id_struktur,
        "nama"          => $request->nama,
        "posisi"        => $request->posisi,
        "nomor"         => $request->nomor,
        "durasi"        => $request->durasi,
        "ttdkntrk"      => $request->ttdkntrk,
        "mulai_ek"      => $request->mulai_ek,
        "berakhir_pb"   => $request->berakhir_pb,
        "berakhir_k"    => $request->berakhir_k,
        "nilai_kb"      => $request->nilai_kb,
        "nilai_kn"      => $request->nilai_kn,
        "hpp"           => $request->hpp,
        "lababruto"     => $request->lababruto,
        "jenisanggaran" => $request->jenisanggaran,
        "cust"          => $request->cust,
        "enduser"       => $request->enduser,
        "masa_warranty" => $request->masa_warranty,
    ]);

    // Redirect kembali ke halaman proyek dengan pesan sukses
    return redirect('/proyek')->with('success', 'Proyek berhasil ditambahkan!');
}

    public function edit($id)
{
    $proyek = Proyek::findOrFail($id);
    $strukturOrganisasi = StrukturOrganisasi::all();
    return view('home.proyek.lengkapi', compact('proyek', 'strukturOrganisasi'));
}

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'id_struktur' => 'nullable|integer',
            'posisi' => 'nullable|string',
            'nomor' => 'nullable|string',
            'durasi' => 'nullable|integer',
            'ttdkntrk' => 'nullable|date',
            'mulai_ek' => 'nullable|date',
            'berakhir_pb' => 'nullable|date',
            'berakhir_k' => 'nullable|date',
            'nilai_kb' => 'nullable|numeric',
            'nilai_kn' => 'nullable|numeric',
            'hpp' => 'nullable|numeric',
            'lababruto' => 'nullable|numeric',
            'jenisanggaran' => 'nullable|string',
            'cust' => 'nullable|string',
            'enduser' => 'nullable|string',
            'masa_warranty' => 'nullable|integer',
        ]);

        // Clean numeric inputs
        if (isset($validatedData['nilai_kb'])) {
            $validatedData['nilai_kb'] = str_replace(',', '', $validatedData['nilai_kb']);
        }

        if (isset($validatedData['nilai_kn'])) {
            $validatedData['nilai_kn'] = str_replace(',', '', $validatedData['nilai_kn']);
        }

        if (isset($validatedData['hpp'])) {
            $validatedData['hpp'] = str_replace(',', '.', $validatedData['hpp']);
        }

        if (isset($validatedData['lababruto'])) {
            $validatedData['lababruto'] = str_replace(',', '.', $validatedData['lababruto']);
        }

        $proyek = Proyek::findOrFail($id);

        // Update proyek
        $proyek->update($validatedData);

        return redirect('/proyek')->with("success","Berhasil DiUpdate!");
    }

    public function delivery($id)
    {
        $proyek = proyek::with('struktur_organisasi')->findOrFail($id);
        return view("home.proyek.selengkapnya", compact("proyek"));


}
}
