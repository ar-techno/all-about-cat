<div class="modal fade" id="ar-modal-img" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Upload Gambar Produk</h4>
            </div>
            <div class="modal-body">
                <form  id="ar-form-img" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" name="id" class="form-control" required >
                    <input type="hidden" id="vendor_id" name="vendor_id" class="form-control" value="{{$info->id}}"  >
                    <div class="row clearfix">
                        <div class="col-lg-10 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input id="gambar" name="gambar[]" class="btn btn-default" placeholder="Pilih Gambar Sesuai" type="file" accept="image/x-png,image/gif,image/jpeg" multiple />
                            </div>
                        </div>
                    </div>
                    <div id="image_preview"></div>
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" id="save_gambar" class="btn btn-default btn-round waves-effect"><i class="zmdi zmdi-upload zmdi-hc-lg"></i> Upload</button>
                <button type="button" id="spinner_id" style="display: none;" class="btn btn-default btn-round waves-effect"><i class="zmdi zmdi zmdi-spinner zmdi-hc-spin"></i> With ...</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>