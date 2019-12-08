<div class="modal fade" id="ar-modal-img" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Upload Gambar Produk</h4>
            </div>
            <div class="modal-body">
                <form action="/" id="frmFileUpload" class="dropzone" style="background-color: #fff;" method="post" enctype="multipart/form-data">
                    <input type="text" id="id_produk" name="id_produk" class="form-control" required hidden>
                       
                    <div class="row clearfix">
                     
                        <div class="col-lg-12 col-md-10 col-sm-8">
                            <div class="form-group">
                                <div class="dz-message">
                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                <h3>Drop files here or click to upload.</h3>
                                <em>(Upload Hanya Berupa Gambar JPG/JPEG/PNG/GIF)</em> </div>
                            <div class="fallback">
                                <input name="file[]" type="file" accept="image/x-png,image/gif,image/jpeg" multiple />
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect"><i class="zmdi zmdi-upload zmdi-hc-lg"></i> Upload</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>