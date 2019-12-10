<div class="modal fade" id="ar-modal-jam-kerja" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="height: 70%">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Waktu Kerja</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Hari Kerja</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <select class="form-control show-tick" id="hari_kerja" name="hari_kerja">
                                    <option value="">-- Tidak Ada --</option>
                                    <option value="10">Data Master</option>
                                    <option value="20">E-Commers</option>
                                    <option value="30">Adoption</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Jam Buka & Tutup</label>
                        </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" id="jam_buka" name="jam_buka" class="form-control timepicker" placeholder="Jam Buka" required>
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" id="jam_tutup" name="jam_tutup" class="form-control timepicker" placeholder="Jam Tutup" required>
                            </div>
                            </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>