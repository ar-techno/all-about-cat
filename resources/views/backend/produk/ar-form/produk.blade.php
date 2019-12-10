<div class="modal fade" id="ar-modal-add" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Tambah Produk</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Nama Produk</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Nama Perusahaan" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">keterangan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <textarea rows="4" id="keterangan" name="keterangan" class="form-control resize" placeholder="Please type what you want..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Stok</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" id="stok" name="stok" class="form-control" placeholder="Jumlah Produk" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">                           
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Tanggal Kadaluarsa</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-calendar"></i>
                                </span>
                                <input type="text" id="tgl_berdiri" name="tgl_berdiri" class="form-control datetimepicker" placeholder="Please choose date & time...">
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