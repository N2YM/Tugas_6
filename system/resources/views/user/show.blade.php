@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>
                <div class="card-body">
                    <h4>Username : {{ $user->username }}</h4>
                    <hr>
                    <h6>Nama: {{$user->nama }}</h6>
                    <h6>Email :{{ $user->email }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection