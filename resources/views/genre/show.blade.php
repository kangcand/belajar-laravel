<div class="modal fade" id="showGenre-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Genre</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label for="">Nama Genre</label>
                    <input type="text" class="form-control" name="nama_genre" value="{{$item->nama_genre}}" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
