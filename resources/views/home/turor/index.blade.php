@extends('layouts.master')
@section('title', 'Struktur Organisasi')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-uppercase fw-bold mb-0">Data Struktur Organisasi Proyek</h5>
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahTurorModal">
                            <i class='bx bx-list-plus'></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Struktur Proyek</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($StrukturOrganisasi as $s)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$s->nama}}</td>
                                <td>
                                    <a href="/turor/{{$s->id}}/workers" class="btn btn-success me-2">
                                        <i class='bx bx-group'></i> Lihat Workers
                                    </a>
                                    <a href="{{ route('turor.bagan', ['id' => $s->id]) }}" class="btn btn-primary">
                                        <i class='bx bx-network-chart'></i> Lihat Bagan
                                    </a>
                                </td>



                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modals tambah --}}
<div class="modal fade" id="tambahTurorModal" tabindex="-1" aria-labelledby="tambahTurorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahTurorModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/turor/simpan" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" id="floatingInput" name="nama"
                        placeholder="Masukkan Nama Struktur Proyek">
                        <label for="floatingInput">Nama Struktur Proyek</label>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
