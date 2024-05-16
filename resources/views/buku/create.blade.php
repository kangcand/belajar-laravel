@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Buku
                    <a href="{{route('buku.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('buku.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="">Judul</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        name="judul">
                                    @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Isbn</label>
                                    <input type="text" class="form-control @error('isbn') is-invalid @enderror"
                                        name="isbn">
                                    @error('isbn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="">Jumlah Halaman</label>
                                    <input type="number" class="form-control @error('jml_halaman') is-invalid @enderror"
                                        name="jml_halaman">
                                    @error('jml_halaman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Tanggal Terbit</label>
                                    <input type="date" class="form-control @error('tgl_terbit') is-invalid @enderror"
                                        name="tgl_terbit">
                                    @error('tgl_terbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="">Cover</label>
                            <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                            @error('cover')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Penulis</label>
                            <select name="id_penulis" class="form-control @error('id_penulis') is-invalid @enderror">
                                <option value="">Pilih Penulis</option>
                                @foreach ($penulis as $data)
                                <option value="{{$data->id}}">{{$data->nama_penulis}}</option>
                                @endforeach
                            </select>
                            @error('tgl_terbit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Genre</label>
                            <select name="genre[]" class="form-select"" multiple>
                                 @foreach ($genre as $data)
                                    <option value=" {{$data->id}}">{{$data->nama_genre}}
                                </option>
                                @endforeach
                            </select>
                            @error('tgl_terbit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">deskripsi buku</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi"></textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
