<div class="modal fade" id="ar-modal-sub-menu" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Tambah Sub Menu</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="ar-modal-form-sub-menu">
                    {{ csrf_field() }}
                    <div class="row clearfix" hidden>
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_menu">Id Sub Menu</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="id" name="id" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="password_2">Group Akses</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <select class="form-control show-tick" id="akses_group_id" name="akses_group_id" >
                                    <option value="">-- Tidak Ada --</option>
                                    @foreach($akses ?? '' as $m)
                                    <option value="{{$m->id}}">{{$m->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="password_2">Nama Menu</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <select class="form-control show-tick" id="submenu_id" name="submenu_id[]" multiple>
                                    <option value="">-- Tidak Ada --</option>
                                    @foreach($submenu ?? '' as $m)
                                    <option value="{{$m->id_child}}">{{$m->nama_parent}} ~ {{$m->nama_child}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="save_submenu" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>