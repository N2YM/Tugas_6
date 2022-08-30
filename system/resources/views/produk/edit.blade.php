@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Produk
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/produk', $produk->id) }}" method="post">
                        @csrf
                        @method("put")
                    <div class="form-grup">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama"value=" {{ $produk->nama }} ">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grup">
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" value="{{ number_format ($produk->harga) }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-grup">
                                <label for="">Berat</label>
                                <input type="text" class="form-control" name="berat"value="{{ $produk->berat }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-grup">
                                <label for="">Stok</label>
                                <input type="text" class="form-control" name="stok"value="{{ $produk->stok }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-grup">
                        <label for="">Deskripsi</label>
                       <textarea  class="form-control"  rows="22" name="deskripsi" >{{ $produk->deskripsi }}"</textarea>
                    </div>
                    <button class="btn btn-dark float-right mt-4"> <i class="mdi mdi-content-save"></i> Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection