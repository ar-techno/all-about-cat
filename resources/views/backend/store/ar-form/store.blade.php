<div class="modal fade" id="ar-modal-edit" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Identitas Toko Kucing</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="ar-modal-form-store">
                    {{ csrf_field() }}
                    <div class="row clearfix" style="display: none;">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_toko">ID Vendor</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="vendor_id" name="vendor_id" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_toko">Nama Toko</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nama_toko" name="nama_toko" class="form-control" placeholder="Nama Toko Anda" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="jenis_vendor">Jenis Vendor</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="jenis_vendor" name="jenis_vendor" class="form-control" placeholder="Jenis Vendor"  disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="no_telp">Nomor Telepon</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Nomor Telepon" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="no_hp">Nomor Handphone</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Nomor Handphone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="email">E-Mail</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control email" placeholder="Ex: example@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="Instagram">Instagram</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Nama Instagram" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="slogan">Slogan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="slogan" name="slogan" class="form-control" placeholder="Selogan Perusahaan" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="tentang_toko">Tentang Toko</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <textarea rows="4" id="tentang_toko" name="tentang_toko" class="form-control resize" placeholder="Please type what you want..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="alamat_toko">Alamat Toko</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <textarea rows="4" id="alamat_toko" name="alamat_toko" class="form-control resize" placeholder="Please type what you want..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Pilih Lokasi</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                               <div class="body">
                                   <div id="googleMap" class="form-group" style="width:100%;height:380px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="latlong">Lat, Long</label>
                        </div>
                        <div class="col-sm-3">
	                        <div class="form-group">
	                               <input type="text" class="form-control" id="lat" name="lat" value="">
	                        </div>
                    	</div>
                        <div class="col-sm-3">
	                        <div class="form-group">
	                               <input type="text" class="form-control" id="lng" name="lng" value="">
	                    	</div>
                    	</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="save_menu" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>