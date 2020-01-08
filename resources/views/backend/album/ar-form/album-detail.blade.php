<div class="modal " id="ar-modal-img-detail"  role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Detail Gambar</h4>
                <button type="button" class="btn btn-info waves-effect btn-sm ull"  onclick="addImages()"><i class="zmdi zmdi-plus "></i> Tambah</button>
            </div>
            <div class="modal-body">
                {{ csrf_field() }}
                <div class="card">
                    <div class="body">
                            <input type="hidden" id="idAlbum" name="idAlbum">
                            <input type="hidden" id="nmAlbum" name="nmAlbum">
                            <div id="imagesList"></div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" onclick="hideModal('ar-modal-img-detail')" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>