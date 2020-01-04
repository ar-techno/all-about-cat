<div class="modal fade" id="ar-modal-img" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Upload Logo</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="ar-modal-form-img">
                    {{ csrf_field() }}

                    <div class="row clearfix" style="display: none;">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="id">ID Vendor</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" id="id" name="id" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Gambar</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="file" id="logo" name="logo" class="form-control" placeholder="Pilih Logo Perusahaan" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="save-data-img" class="btn btn-default btn-round waves-effect"><i class="zmdi zmdi-upload zmdi-hc-lg"></i> Upload</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>