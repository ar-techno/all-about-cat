<div class="modal fade" id="ar-modal-confirm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Status Vendors</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Id Member</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" id="no_pendaftaran" class="form-control" placeholder="Nomor Member" required>
                                <input type="text" id="users_id" class="form-control" hidden required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Nama Pemilik</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nama_pemilik" class="form-control" placeholder="Nama pemilik" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Tanggal Gabung</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Status</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="gender" id="male" class="with-gap" value="option1">
                                    <label for="male">Aktif</label>
                                </div>                                
                                <div class="radio inlineblock">
                                    <input type="radio" name="gender" id="Female" class="with-gap" value="option2" checked="">
                                    <label for="Female">Non Aktif</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Keterangan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <textarea rows="4" id="keterangan" name="keterangan" class="form-control resize" placeholder="Please type what you want..."></textarea>
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