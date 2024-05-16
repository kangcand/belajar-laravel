<div class="modal fade" id="editGenre-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Genre</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('genre.update',$item->id)}}" method="post">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <div class="mb-2">
                        <label for="">Nama Genre</label>
                        <input type="text" class="form-control @error('nama_genre') is-invalid @enderror"
                            name="nama_genre" value="{{$item->nama_genre}}">
                        @error('nama_genre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
