@extends('layouts.master')
@section('title', 'Edit')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-uppercase fw-bold mb-0">Edit Data</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('proyek.store') }}" method="POST">
                        @csrf

                        <!-- Pilihan Struktur Organisasi -->
                        <div class="mb-3">
                            <label for="id_struktur" class="form-label">Struktur Organisasi</label>
                            <select name="id_struktur" id="id_struktur" class="form-control">
                                <option value="">-- Pilih Struktur --</option>
                                @foreach ($strukturOrganisasi as $struktur)
                                    <option value="{{ $struktur->id }}" {{ old('id_struktur') == $struktur->id ? 'selected' : '' }}>
                                        {{ $struktur->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nama Proyek -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Kontrak Awal</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
                        </div>

                        <!-- Posisi dalam Kontrak -->
                        <div class="mb-3">
                            <label for="posisi" class="form-label">Posisi dalam Kontrak</label>
                            <input type="text" name="posisi" id="posisi" class="form-control" value="{{ old('posisi') }}">
                        </div>

                        <!-- No. Kontrak -->
                        <div class="mb-3">
                            <label for="nomor" class="form-label">No. Kontrak</label>
                            <input type="text" name="nomor" id="nomor" class="form-control" value="{{ old('nomor') }}">
                        </div>

                        <!-- Durasi Kontrak -->
                        <div class="mb-3">
                            <label for="durasi" class="form-label">Durasi Kontrak (Bulan)</label>
                            <input type="number" name="durasi" id="durasi" class="form-control" value="{{ old('durasi') }}">
                        </div>

                        <!-- Tanggal TTD Kontrak -->
                        <div class="mb-3">
                            <label for="ttdkntrk" class="form-label">Tanggal TTD Kontrak</label>
                            <input type="date" name="ttdkntrk" id="ttdkntrk" class="form-control" value="{{ old('ttdkntrk') }}">
                        </div>

                        <!-- Tanggal Mulai Efektif Kontrak -->
                        <div class="mb-3">
                            <label for="mulai_ek" class="form-label">Tanggal Mulai Efektif Kontrak</label>
                            <input type="date" name="mulai_ek" id="mulai_ek" class="form-control" value="{{ old('mulai_ek') }}">
                        </div>

                        <!-- Tanggal Berakhir Pengiriman Barang -->
                        <div class="mb-3">
                            <label for="berakhir_pb" class="form-label">Tanggal Berakhir Pengiriman Barang</label>
                            <input type="date" name="berakhir_pb" id="berakhir_pb" class="form-control" value="{{ old('berakhir_pb') }}">
                        </div>

                        <!-- Tanggal Berakhir Kontrak -->
                        <div class="mb-3">
                            <label for="berakhir_k" class="form-label">Tanggal Berakhir Kontrak</label>
                            <input type="date" name="berakhir_k" id="berakhir_k" class="form-control" value="{{ old('berakhir_k') }}">
                        </div>

                        <!-- Nilai Kontrak Bruto -->
                        <div class="mb-3">
                            <label for="nilai_kb" class="form-label">Nilai Kontrak Bruto (+PPN)</label>
                            <input type="number" name="nilai_kb" id="nilai_kb" class="form-control" value="{{ old('nilai_kb') }}">
                        </div>

                        <!-- Nilai Kontrak Netto -->
                        <div class="mb-3">
                            <label for="nilai_kn" class="form-label">Nilai Kontrak Netto</label>
                            <input type="number" name="nilai_kn" id="nilai_kn" class="form-control" value="{{ old('nilai_kn') }}">
                        </div>

                        <!-- HPP -->
                        <div class="mb-3">
                            <label for="hpp" class="form-label">HPP (%)</label>
                            <input type="number" name="hpp" id="hpp" class="form-control" value="{{ old('hpp') }}">
                        </div>

                        <!-- Laba Bruto -->
                        <div class="mb-3">
                            <label for="lababruto" class="form-label">Laba Bruto (%)</label>
                            <input type="number" name="lababruto" id="lababruto" class="form-control" value="{{ old('lababruto') }}">
                        </div>

                        <!-- Jenis Anggaran -->
                        <div class="mb-3">
                            <label for="jenisanggaran" class="form-label">Jenis Anggaran</label>
                            <input type="text" name="jenisanggaran" id="jenisanggaran" class="form-control" value="{{ old('jenisanggaran') }}">
                        </div>

                        <!-- Customer -->
                        <div class="mb-3">
                            <label for="cust" class="form-label">Customer</label>
                            <input type="text" name="cust" id="cust" class="form-control" value="{{ old('cust') }}">
                        </div>

                        <!-- End User -->
                        <div class="mb-3">
                            <label for="enduser" class="form-label">End User</label>
                            <input type="text" name="enduser" id="enduser" class="form-control" value="{{ old('enduser') }}">
                        </div>

                        <!-- Masa Warranty -->
                        <div class="mb-3">
                            <label for="masa_warranty" class="form-label">Masa Warranty (Bulan)</label>
                            <input type="number" name="masa_warranty" id="masa_warranty" class="form-control" value="{{ old('masa_warranty') }}">
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('proyek.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
                @endsection
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
