<div class="modal fade" id="ar-modal-layanan" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="height: 70%">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Layanan Toko</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="ar-modal-form-layanan">
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
                            <label for="nm_layanan">Nama Layanan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nm_layanan" name="nm_layanan" class="form-control" placeholder="Nama Layanan" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Tarif / Harga</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
	                        <div class="form-group">
	                            <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga / Tarif Layanan" required>
	                        </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="keterangan">Keterangan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input class="form-control show-tick" id="keterangan" name="keterangan" placeholder="Syarat / Keterangan">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="statusLayanan">Status Layanan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <select class="form-control show-tick" id="statusLayanan" name="statusLayanan">
                                    <option value="">-- Tidak Ada --</option>
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                                    <option value="99">Hapus</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="save-data-layanan" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>