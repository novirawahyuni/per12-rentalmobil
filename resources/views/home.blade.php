@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Rental Mobil</h4>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($mobils as $mobil)
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="{{ asset('/storage/' . $mobil->foto) }}" 
                                style="width: auto; height:300px;" alt="Card image cap">
                            <div class="card-header">
                                <h5 class="card-title">{{ $mobil->merek }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Alamat : {{ $mobil->rentalMobil->alamat }}</p>
                                <p class="card-text text-dark">Kontak Owner : {{ $mobil->rentalMobil->no_hp }}</p>
                                <a href="#" class="btn btn-primary float-right">Check</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>    
        </div>
    </div>
@endsection