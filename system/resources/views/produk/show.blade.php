@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">z
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <h4>{{ $produk->nama }}</h4>
                    <hr>
                    <h6>Harga: Rp.{{number_format ($produk->harga) }}</h6>
                    <h6>Stok :{{ $produk->stok }}</h6>
                    <h6>Berat :{{ $produk->berat }} gr</h6>
                    <h6>Deskripsi : <br>{!!nl2br ($produk->deskripsi) !!}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection