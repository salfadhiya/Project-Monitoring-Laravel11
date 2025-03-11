@extends('layouts.master')
@section('title', 'Proyek')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-uppercase fw-bold mb-0">Data Proyek</h5>
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahProyekModal">
                            <i class='bx bx-folder-plus'></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Proyek</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proyek as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->nama}}</td>
                                <td>
                                    <a href="{{ route('proyek.selengkapnya', ['id' => $p->id]) }}" class="btn btn-success">  <i class='bx bx-right-arrow-alt'></i></a>
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
<div class="modal fade" id="tambahProyekModal" tabindex="-1" aria-labelledby="tambahProyekModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahProyekModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/proyek/simpan" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" id="floatingInput" name="nama"
                        placeholder="Masukkan Nama Proyek">
                        <label for="floatingInput">Nama Proyek</label>
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
