<div class="modal fade" id="ar-modal-kategori" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Tambah Main Menu</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="ar-modal-form">
                    {{ csrf_field() }}
                    <div class="row clearfix" hidden>
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="id">Id Kategori</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="id" name="id" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nm_kategori">Nama Menu</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nm_kategori" name="nm_kategori" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="jenisvendor_id">Jenis Vendor</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <select class="form-control show-tick" id="jenisvendor_id" name="jenisvendor_id" >
                                    <option value="">-- Tidak Ada --</option>
                                    @foreach($vendor ?? '' as $m)
                                    <option value="{{$m->id}}">{{$m->nama_vendor}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="save_kategori" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>