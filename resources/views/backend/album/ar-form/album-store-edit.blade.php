<div class="modal " id="ar-modal-album-store-edit" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <form  id="ar-form-store-edit" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" name="id" class="form-control" required >
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="vendor_id">Vendor</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="hidden" id="vendor_id" name="vendor_id" class="form-control" value="{{$info->id}}">
                                <input type="text" id="nama_toko" name="nama_toko" class="form-control" value="{{$info->nama_toko}}"  disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="vendor_id">Nama Album</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nama_album" name="nama_album" class="form-control" placeholder="Nama Album">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="vendor_id">Title</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="title_gambar" name="title_gambar" class="form-control" placeholder="Title Gambar">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="keterangan">keterangan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <textarea rows="4" id="keterangan" name="keterangan" class="form-control resize" placeholder="Please type what you want..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                    	<div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="keterangan">Upload Thumbnail</label>
                        </div>
                        <div class="col-lg-4 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input id="gambar" name="gambar" class="btn btn-default" placeholder="Pilih Gambar Sesuai" type="file" accept="image/x-png,image/gif,image/jpeg" multiple />
                            </div>
                        </div>
                    </div>
                    <div id="image_preview"></div>
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" id="save_album" class="btn btn-default btn-round waves-effect"><i class="zmdi zmdi-upload zmdi-hc-lg"></i> Save</button>
                <button type="button" onclick="hideModal('ar-modal-album-store')" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>