@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <form action="{{ url('user', $user->id) }}" method="post">
                        @csrf
                        @method("put")
                    <div class="form-grup">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username"value=" {{ $user->username }} ">
                    </div>
                    <div class="form-grup">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama"value=" {{ $user->nama }} ">
                    </div>
                    <div class="form-grup">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email"value=" {{ $user->email }} ">
                    </div>
                    <div class="form-grup">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button class="btn btn-dark float-right mt-4"> <i class="mdi mdi-content-save"></i> Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection