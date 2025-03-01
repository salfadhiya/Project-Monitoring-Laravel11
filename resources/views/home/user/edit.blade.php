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
                    <form action="/user/{{$user->id}}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$user->name}}"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$user->email}}"
                            />
                        </div>

                        <div class="mb-3">
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id="password"
                                aria-describedby="helpId"
                                placeholder=""
                                value="{{$user->password}}"
                                hidden
                            />
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" name="role" id="role">
                                <option value="ADMIN" {{ $user->role == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                            </select>
                        </div>

                        <a href="/user" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary" type="submit">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
