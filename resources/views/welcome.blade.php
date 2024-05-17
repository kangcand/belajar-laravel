@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Selamat Datang @guest @else <strong>{{Auth::user()->name}}</strong> @endguest
                </div>
            </div>
            <div class="row py-4">
                @foreach ($buku as $item)
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/buku/'.$item->cover)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/buku/{{$item->id}}">
                            <p class="card-text">{{$item->judul}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Penulis</div>

                    <div class="card-body">
                        @foreach ($penulis as $item)
                        <a href="" class="btn btn-outline-info">{{$item->nama_penulis}}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-12 py-4">
                <div class="card">
                    <div class="card-header">Daftar Genre</div>
                    <div class="card-body">
                        @foreach ($genre as $item)
                        <a href="" class="btn btn-rounded btn-outline-success">{{$item->nama_genre}}</a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection