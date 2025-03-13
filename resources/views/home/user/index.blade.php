@extends('layouts.master')
@section('title', 'User')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title text-uppercase fw-bold mb-0">Data User</h5>
                    <div>
                        <button type="button" class="btn btn-primary"  data-bs-toggle="offcanvas" data-bs-target="#tambahUserCanvas">
                            <i class='bx bx-user-plus'></i>
                        </button>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>encrypted</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    <a href="/user/{{$user->id}}/edit" class="btn btn-warning">
                                        <i class='bx bx-edit-alt'></i>
                                    </a>
                                        <a href="javascript:void(0)" class="btn btn-danger delete-btn" data-id="{{ $user->id }}"> <i class='bx bx-trash'></i></a>
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
<!-- Offcanvas Tambah Data -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="tambahUserCanvas" aria-labelledby="tambahUserCanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold" id="tambahUserCanvasLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="/user/simpan" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <div class="input-group">
                    <span class="input-group-text"><i class='bx bx-user-pin'></i></span>
                    <input required type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class='bx bx-envelope' ></i></span>
                    <input required type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class='bx bx-hide' ></i></span>
                    <input required type="password" class="form-control" id="password" name="password" placeholder="Masukkan Kata Sandi">
                </div>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <div class="input-group">
                    <span class="input-group-text"><i class='bx bx-group' ></i></i></span>
                    <select required name="role" class="form-select" id="role">
                        <option selected>Pilih</option>
                        <option value="ADMIN">ADMIN</option>
                    </select>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Batal</button>
            </div>
        </form>
    </div>
</div>

@endsection
