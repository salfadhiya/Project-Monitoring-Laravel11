@extends('layouts.master')
@section('title', 'Workers')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-uppercase fw-bold mb-0">Data Workers</h5>
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahWorkersModal">
                            <i class='bx bx-user-plus'></i>
                        </button>
                        <a href="/turor/workers" class="btn btn-success"> LIHAT BAGAN
                        </a>

                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <a href="/turor" class="btn btn-secondary mb-3">KEMBALI</a>
                    </div>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Proyek</th>
                                <th>Jabatan</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($workers as $w)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$w->struktur_organisasi->nama ?? 'Tidak Ada Data' }}</td>
                                <td>{{$w->jabatan}}</td>
                                <td>{{$w->nama}}</td>
                                <td>
                                    <a href="/workers/{{$w->id}}/edit" class="btn btn-warning">
                                        <i class='bx bx-edit-alt'></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger delete-btn" data-id="{{ $w->id }}">
                                        <i class='bx bx-trash'></i>
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
<div class="modal fade" id="tambahWorkersModal" tabindex="-1" aria-labelledby="tambahWorkersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahWorkersModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/workers/simpan" method="POST">
                    @csrf

                    {{-- Ambil ID struktur dari URL --}}
                    <input type="hidden" name="id_struktur" value="{{ request()->route('id') }}">

                    {{-- Tampilkan Nama Struktur Organisasi --}}
                    @if(isset($struktur))
                        <div class="mb-3">
                            <label class="form-label">Struktur Organisasi</label>
                            <input type="text" class="form-control" value="{{ $struktur->nama }}" readonly>
                        </div>
                    @else
                        <p class="text-danger">Struktur tidak ditemukan.</p>
                    @endif

                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" id="floatingInput" name="jabatan"
                        placeholder="Masukkan Nama Jabatan">
                        <label for="floatingInput">Nama Jabatan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" id="floatingInput" name="nama"
                        placeholder="Masukkan Nama">
                        <label for="floatingInput">Nama</label>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
