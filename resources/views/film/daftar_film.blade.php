@extends('layouts.master')
@section('content')
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class=" row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"">
            @php
                $film = App\Models\Film::all();
            @endphp

            @foreach ($film as $item)
            <div class=" col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em">{{Str::limit($item->judul,50,'...')}}</text>
                </svg>
                <div class="card-body">
                    <p class="card-text">{{$item->deskripsi}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" href="film/{{$item->id}}"
                                class="btn btn-sm btn-outline-secondary">Lihat</a>
                        </div>
                        <small class="text-body-secondary">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
