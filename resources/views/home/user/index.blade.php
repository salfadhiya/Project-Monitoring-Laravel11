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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahUserModal">
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

{{-- modals tambah --}}
<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahUserModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/user/simpan" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" id="floatingInput" name="name"
                        placeholder="Masukkan Nama">
                        <label for="floatingInput">Nama</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required type="password" class="form-control" id="floatingPassword" name="password"
                            placeholder="Masukkan Kata Sandi">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select required name="role" class="form-select" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected>Pilih</option>
                            <option value="ADMIN">ADMIN</option>
                        </select>
                        <label for="floatingSelect">Role</label>
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
