@extends('layouts.master')
@section('title', 'Proyek')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h4 class="card-title text-uppercase fw-bold">Data Proyek</h4>
                    <div>
                        <a href="{{ route('proyek.lengkapi', $proyek->id) }}" class="btn btn-primary shadow-sm">
                            <i class="bx bx-edit-alt"></i> Lengkapi Data
                        </a>
                        <a href="/proyek" class="btn btn-outline-secondary shadow-sm">
                            <i class="bx bx-arrow-back"></i> Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <!-- Card Informasi Proyek -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm rounded-lg">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold">Data Proyek</h5>
                                    <table class="table table-hover table-striped border rounded">
                                        <tbody>
                                            <tr>
                                                <th>ID STRUKTUR</th>
                                                <td>
                                                    @if($proyek->struktur_organisasi)
                                                        Struktur Organisasi: <strong>{{ $proyek->struktur_organisasi->nama }}</strong>
                                                    @else
                                                        <span class="text-danger">Tidak tersedia</span>
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
                                                <td>{{ \Carbon\Carbon::parse($proyek->ttdkntrk)->format('Y-m-d') }}</td>
                                            </tr>
                                            <tr>
                                                <th>TANGGAL MULAI EFEKTIF</th>
                                                <td>{{ \Carbon\Carbon::parse($proyek->mulai_ek)->format('Y-m-d') }}</td>
                                            </tr>
                                            <tr>
                                                <th>TANGGAL BERAKHIR PENGIRIMAN</th>
                                                <td>{{ \Carbon\Carbon::parse($proyek->berakhir_pb)->format('Y-m-d') }}</td>
                                            </tr>
                                            <tr>
                                                <th>TANGGAL BERAKHIR KONTRAK</th>
                                                <td>{{ \Carbon\Carbon::parse($proyek->berakhir_k)->format('Y-m-d') }}</td>
                                            </tr>

                                            <tr>
                                                <th>NILAI KONTRAK BRUTO</th>
                                                <td>Rp {{ number_format($proyek->nilai_kb, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <th>NILAI KONTRAK NETTO</th>
                                                <td>Rp {{ number_format($proyek->nilai_kn, 0, ',', '.') }}</td>
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

                        <!-- Card Persentase Task List -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm rounded-lg">
                                <div class="card-body text-center">
                                    <h5 class="card-title">PERSENTASE TASK LIST</h5>
                                    <p class="display-4 text-primary fw-bold">25%</p>
                                    <div class="progress rounded-pill" style="height: 15px;">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 25%;"></div>
                                    </div>
                                    <p class="mt-3 text-muted">Progres proyek saat ini</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END ROW -->
                </div> <!-- END CARD BODY -->
            </div> <!-- END CARD -->
        </div>
    </div>
</div>

@endsection
