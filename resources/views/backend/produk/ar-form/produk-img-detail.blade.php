<div class="modal " id="ar-modal-img-detail"  role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Detail Gambar Produk</h4>
            </div>
            <div class="modal-body">
                {{ csrf_field() }}
                <div id="imagesList"></div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Keterangan</strong> Gambar</h2>                        
                    </div>
                    <div class="body">
                        <p class="prettyprint prettyprinted" style="font-family: initial;" ><span class="tag" id="title_images"></span></p>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>