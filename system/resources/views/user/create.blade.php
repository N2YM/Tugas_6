@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <form action="{{ url('user') }}" method="post">
                        @csrf
                    <div class="form-grup">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-grup">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-grup">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-grup">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button class="btn btn-dark float-right mt-4"> <i class="mdi mdi-content-save"></i> Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection