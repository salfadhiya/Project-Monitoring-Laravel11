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
                    <form action="{{ url('/workers/update/' . $workers->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="id_struktur" hidden>Struktur Organisasi</label>
                        <select class="form-select" id="id_struktur" name="id_struktur" hidden>
                            @foreach ($struktur_organisasi as $item)
                                <option value="{{ $item->id }}" {{ $workers->id_struktur == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>

                        <br>

                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama"
                                id="nama"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$workers->nama}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Jabatan</label>
                            <input
                                type="text"
                                class="form-control"
                                name="jabatan"
                                id="jabatan"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$workers->jabatan}}"
                            />
                        </div>

                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary" type="submit">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
