@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            @include('genre.create')
            <div class="card border-secondary">
                <div class="card-header">Data genre
                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addGenre"
                        style="float: right">Tambah</button>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Genre</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($genres as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nama_genre}}</td>
                                    <td>
                                        <form action="{{route('genre.destroy',$item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a class="btn btn-sm btn-outline-success" data-bs-toggle="modal"
                                                data-bs-target="#editGenre-{{$item->id}}">Edit</a>
                                            <a class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                                data-bs-target="#showGenre-{{$item->id}}">Show</a>
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection