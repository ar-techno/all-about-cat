<div class="modal fade" id="ar-modal-" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Status Vendors</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="form-edit-">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Id Member</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" id="id" name="id" class="form-control" placeholder="Nomor Member" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Nama Pemilik</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nama_pemilik" readonly class="form-control" placeholder="Nama pemilik" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Foto</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="body m-b-20">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="category">Foto Pemilik</p>
                                <img id="foto_pemilik" src="" alt="Rounded Image" class="rounded-circle">
                            </div>
                            <div class="col-sm-6">
                                <p class="category">Foto KTP</p>
                                <img id="foto_ktp" src="" alt="Circle Image" class="rounded">
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Tanggal Daftar</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                               <input type="text" id="tgl_daftar"  name="tgl_berdiri" class="form-control " readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="status">Akses Group</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <select class="form-control show-tick" tabindex="-98" id="akses_group" name="akses_group">
                                    <option value="99">-- Tidak Ada Akses --</option>
                                    @foreach($akses_group as $ag)
                                    <option value="{{$ag->id}}">{{$ag->nama}} -> <i>{{$ag->detail}}</i></option>
                                    @endforeach
                                </select>
                            </div>
                      
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="status">Status</label>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick" tabindex="-98" id="Ostatus" name="status">
                                    <option value="">-- Please select --</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                      
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Keterangan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <textarea rows="4" id="alamat" class="form-control resize" readonly></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="editPendaftar('')" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>