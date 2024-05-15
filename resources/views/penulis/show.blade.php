@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Penulis
                    <a href="{{route('penulis.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama Penulis</label>
                        <input type="text" class="form-control @error('nama_penulis') is-invalid @enderror"
                            name="nama_penulis" value="{{$penulis->nama_penulis}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Bio Penulis</label>
                        <textarea class="form-control" name="bio" disabled>{{$penulis->bio}}</textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
