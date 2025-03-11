@extends('layouts.master')
@section('title', 'Lengkapi Data Proyek')
@section('content')

<style>
    /* Agar select2 memiliki lebar yang sama dengan input */
    .select2-container {
        width: 100% !important;
    }
</style>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-uppercase fw-bold mb-0">Lengkapi Data Proyek</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('proyek.update', $proyek->id) }}" method="POST">
                        @csrf
                        @method('PUT')


                         <!-- Nama Kontrak Awal (Read-Only) -->
                        <div class="col-md-12 mb-3">
                            <label for="nama" class="form-label">Nama Kontrak Awal</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="{{ old('nama', $proyek->nama) }}" readonly>
                        </div>

                        <div class="row">
                            <!-- Struktur Organisasi -->
                            <div class="col-md-6 mb-3">
                                <label for="id_struktur" class="form-label">Struktur Organisasi</label>
                                <select name="id_struktur" id="id_struktur" class="form-select select2">
                                    <option value="">-- Pilih Struktur --</option>
                                    @foreach ($strukturOrganisasi as $struktur)
                                        <option value="{{ $struktur->id }}" {{ old('id_struktur', $proyek->id_struktur) == $struktur->id ? 'selected' : '' }}>
                                            {{ $struktur->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- Posisi dalam Kontrak -->
                            <div class="col-md-6 mb-3">
                                <label for="posisi" class="form-label">Posisi dalam Kontrak</label>
                                <input type="text" name="posisi" placeholder="Masukkan posisi dalam kontrak"id="posisi" class="form-control" value="{{ old('posisi', $proyek->posisi) }}">
                            </div>

                            <!-- No. Kontrak -->
                            <div class="col-md-6 mb-3">
                                <label for="nomor" class="form-label">No. Kontrak</label>
                                <input type="text" placeholder="Masukkan nomor kontrak" name="nomor" id="nomor" class="form-control" value="{{ old('nomor', $proyek->nomor) }}">
                            </div>

                            <!-- Durasi Kontrak -->
                            <div class="col-md-6 mb-3">
                                <label for="durasi" class="form-label">Durasi Kontrak (Bulan)</label>
                                <input type="number" placeholder="Masukkan durasi kontrak dalam bulan" name="durasi" id="durasi" class="form-control" value="{{ old('durasi', $proyek->durasi) }}">
                            </div>

                            <div class="row">
                                <!-- Tanggal dalam satu baris -->
                                <div class="col-md-4 mb-3">
                                    <label for="ttdkntrk" class="form-label">Tanggal TTD Kontrak</label>
                                    <input type="text" name="ttdkntrk" id="ttdkntrk" class="form-control datepicker" placeholder="Pilih tanggal">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="mulai_ek" class="form-label">Tanggal Mulai Efektif Kontrak</label>
                                    <input type="text" name="mulai_ek" id="mulai_ek" class="form-control datepicker" placeholder="Pilih tanggal">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="berakhir_pb" class="form-label">Tanggal Berakhir Pengiriman Barang</label>
                                    <input type="text" name="berakhir_pb" id="berakhir_pb" class="form-control datepicker" placeholder="Pilih tanggal">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Nilai Kontrak (Bruto & Netto) sejajar -->
                                <div class="col-md-6 mb-3">
                                    <label for="nilai_kb" class="form-label">Nilai Kontrak Bruto (+PPN)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" id="nilai_kb"
                                            name="nilai_kb" value="{{ old('nilai_kb', $proyek->nilai_kb) }}"
                                            oninput="formatCurrency(this)" placeholder="Masukkan nilai kontrak bruto">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nilai_kontrak_netto" class="form-label">Nilai Kontrak Netto</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" id="nilai_kontrak_netto"
                                            name="nilai_kontrak_netto" value="{{ old('nilai_kontrak_netto', $proyek->nilai_kontrak_netto) }}"
                                            oninput="formatCurrency(this)" placeholder="Masukkan nilai kontrak netto">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                           <!-- HPP (%) -->
                            <div class="col-md-6 mb-3">
                                <label for="hpp" class="form-label">HPP (%)</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="hpp" name="hpp"
                                        value="{{ old('hpp', $proyek->hpp) }}" oninput="formatPercentage(this)" placeholder="Masukkan HPP">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>

                            <!-- Laba Bruto (%) -->
                            <div class="col-md-6 mb-3">
                                <label for="lababruto" class="form-label">Laba Bruto (%)</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="lababruto" name="lababruto"
                                        value="{{ old('lababruto', $proyek->lababruto) }}" oninput="formatPercentage(this)" placeholder="Masukkan laba bruto">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>

                            <!-- Jenis Anggaran -->
                            <div class="col-md-6 mb-3">
                                <label for="jenisanggaran" class="form-label">Jenis Anggaran</label>
                                <input type="text" placeholder="Masukkan jenis anggaran" name="jenisanggaran" id="jenisanggaran" class="form-control" value="{{ old('jenisanggaran', $proyek->jenisanggaran) }}">
                            </div>

                            <!-- Customer & End User -->
                            <div class="col-md-6 mb-3">
                                <label for="cust" class="form-label">Customer</label>
                                <input type="text" placeholder="Masukkan custumer" name="cust" id="cust" class="form-control" value="{{ old('cust', $proyek->cust) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="enduser" class="form-label">End User</label>
                                <input type="text" placeholder="Masukkan enduser" name="enduser" id="enduser" class="form-control" value="{{ old('enduser', $proyek->enduser) }}">
                            </div>

                            <!-- Masa Warranty -->
                            <div class="col-md-6 mb-3">
                                <label for="masa_warranty" class="form-label">Masa Warranty (Bulan)</label>
                                <input type="number" placeholder="Masukkan masa warranty" name="masa_warranty" id="masa_warranty" class="form-control" value="{{ old('masa_warranty', $proyek->masa_warranty) }}">
                            </div>
                        </div>

                    <!-- Tombol Simpan & Kembali -->
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-success px-4 py-2 shadow-sm me-2">
                                <i class="bx bx-save"></i> Simpan Perubahan
                            </button>
                            <a href="javascript:history.back()" class="btn btn-secondary px-4 py-2 shadow-sm">
                                <i class="bx bx-arrow-back"></i> Kembali
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function formatCurrency(element) {
        let value = element.value.replace(/\D/g, ""); // Hapus semua karakter non-digit
        value = new Intl.NumberFormat("en-US").format(value); // Format angka sesuai format US Dollar
        element.value = value;
    }
</script>

<script>
    function formatInput(input) {
        input.value = input.value.replace(',', '.'); // Mengubah koma jadi titik otomatis
    }
    </script>



@endsection
