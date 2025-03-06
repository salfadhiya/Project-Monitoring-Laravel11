@extends('layouts.master')
@section('title', 'Proyek')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-center w-100">
                        <h4 class="card-title text-uppercase fw-bold mb-0">Data Proyek</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        {{-- <a href="{{ route('proyek.lengkapi', $proyek->id) }}" class="btn btn-primary">Lengkapi Data</a> --}}
                        <a href="{{ route('proyek.lengkapi', $proyek->id) }}" class="btn btn-success mb-3">LENGKAPI DATA</a>
                        <a href="/proyek" class="btn btn-secondary mb-3">KEMBALI</a>
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <!-- Card Informasi (Kiri) -->
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title text-center fw-bold mb-0">DATA PROYEK</h5>
                                        <br>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>ID STRUKTUR</th>
                                                    <td>
                                                        @if($proyek->struktur_organisasi)
                                                            <p>Struktur Organisasi: {{ $proyek->struktur_organisasi->nama }}</p>
                                                        @else
                                                            <p>Struktur Organisasi: Tidak tersedia</p>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>NAMA KONTRAK AWAL</th>
                                                    <td>{{ $proyek->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th>POSISI DALAM KONTRAK</th>
                                                    <td>{{ $proyek->posisi }}</td>
                                                </tr>
                                                <tr>
                                                    <th>NO. KONTRAK</th>
                                                    <td>{{ $proyek->nomor }}</td>
                                                </tr>
                                                <tr>
                                                    <th>DURASI KONTRAK</th>
                                                    <td>{{ $proyek->durasi }} Bulan</td>
                                                </tr>
                                                <tr>
                                                    <th>TANGGAL TTD KONTRAK</th>
                                                    <td>{{ $proyek->ttdkntrk }}</td>
                                                </tr>
                                                <tr>
                                                    <th>TANGGAL MULAI EFEKTIF KONTRAK</th>
                                                    <td>{{ $proyek->mulai_ek }}</td>
                                                </tr>
                                                <tr>
                                                    <th>TANGGAL BERAKHIR PENGIRIMAN BARANG</th>
                                                    <td>{{ $proyek->berakhir_pb }}</td>
                                                </tr>
                                                <tr>
                                                    <th>TANGGAL BERAKHIR KONTRAK</th>
                                                    <td>{{ $proyek->berakhir_k }}</td>
                                                </tr>
                                                <tr>
                                                    <th>NILAI KONTRAK BRUTO (+Ppn)</th>
                                                    <td>{{ number_format($proyek->nilai_kb, 0, ',', '.') }}</td>
                                                </tr>
                                                <tr>
                                                    <th>NILAI KONTRAK NETTO</th>
                                                    <td>{{ number_format($proyek->nilai_kn, 0, ',', '.') }}</td>
                                                </tr>
                                                <tr>
                                                    <th>HPP (%)</th>
                                                    <td>{{ $proyek->hpp }}%</td>
                                                </tr>
                                                <tr>
                                                    <th>LABA BRUTO (%)</th>
                                                    <td>{{ $proyek->lababruto }}%</td>
                                                </tr>
                                                <tr>
                                                    <th>JENIS ANGGARAN</th>
                                                    <td>{{ $proyek->jenisanggaran }}</td>
                                                </tr>
                                                <tr>
                                                    <th>CUSTOMER</th>
                                                    <td>{{ $proyek->cust }}</td>
                                                </tr>
                                                <tr>
                                                    <th>END USER</th>
                                                    <td>{{ $proyek->enduser }}</td>
                                                </tr>
                                                <tr>
                                                    <th>MASA WARRANTY</th>
                                                    <td>{{ $proyek->masa_warranty }} Bulan</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Persentase (Kanan) -->
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">PERSENTASE TASK LIST</h5>
                                        <p class="display-4">25%</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 25%;"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
