@extends('layouts.master')
@section('title', 'Deliver')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-uppercase fw-bold mb-0">Data Delivery</h5>
                    <div>
                        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#tambahDeliveryModal">
                            <i class='bx bx-user-plus'></i>
                        </button>
                        <a href="/proyek" class="btn btn-secondary shadow-sm">
                            <i class="bx bx-arrow-back"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
<<<<<<< HEAD

                    <div class="row mb-4 justify-content-center">
                        <div class="col-md-5 col-lg-4 mb-3">
                            <div class="card h-100 shadow-sm border-0">
                                <img class="card-img-top rounded-top img-fluid" style="max-height: 200px; width: auto; object-fit: contain;" src="../../assets/img/logo/fth.png" alt="Card image cap" />
                                <div class="card-body text-center">
                                    <h6 class="card-title fw-bold text-primary">FTH</h6>
                                    <p class="card-text text-muted small">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-outline-primary rounded-pill px-3 py-1 small">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4 mb-3">
                            <div class="card h-100 shadow-sm border-0">
                                <img class="card-img-top rounded-top img-fluid" style="max-height: 200px; width: auto; object-fit: contain;" src="../../assets/img/logo/mlh.png" alt="Card image cap" />
                                <div class="card-body text-center">
                                    <h6 class="card-title fw-bold text-danger">MLH</h6>
                                    <p class="card-text text-muted small">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                    <a href="javascript:void(0)" class="btn btn-outline-danger rounded-pill px-3 py-1 small">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>



=======
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Deliveryable</th>
                                <th>Nama Proyek</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($delivery as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->proyek->nama}}</td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-danger delivery-delete-btn" data-id="{{ $d->id }}">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
>>>>>>> bd409d1dc33eeabae9aee5ac805ab71b343c296e
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahDeliveryModal" tabindex="-1" aria-labelledby="tambahDeliveryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahDeliveryModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/proyek/delivery/simpan" method="POST">
                    @csrf

                    {{-- Ambil ID struktur dari URL --}}
                    <input type="hidden" name="id_proyek" value="{{ request()->route('id') }}">

                    {{-- Tampilkan Nama Struktur Organisasi --}}
                    @if(isset($proyek))
                        <div class="mb-3">
                            <label class="form-label">Proyek</label>
                            <input type="text" class="form-control" value="{{ $proyek->nama }}" readonly>
                        </div>
                    @else
                        <p class="text-danger">Proyek tidak ditemukan.</p>
                    @endif

                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" id="floatingInput" name="nama"
                        placeholder="Masukkan Nama">
                        <label for="floatingInput">Nama Deliveryable</label>
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
