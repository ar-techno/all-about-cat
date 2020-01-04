<div class="modal fade" id="ar-modal-produk" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Tambah Produk</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="ar-modal-form">
                    {{ csrf_field() }}
                    <div class="row clearfix" style="display: none;">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="id">ID Produk</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="id" name="id" class="form-control"  hidden>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="vendor_id">Nama Vendor</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="vendor_id" name="vendor_id" class="form-control" value="{{$info->id}}"  hidden>
                                <input type="text" id="nama_toko" name="nama_toko" class="form-control" value="{{$info->nama_toko}}"  disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="nama_produk">Nama Produk</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
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
                            <label for="stok">Stok</label>
                        </div>
                        <div class="col-lg-4 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" id="stok" name="stok" class="form-control" placeholder="Jumlah Produk" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="harga">Harga</label>
                        </div>
                        <div class="col-lg-4 col-md-10 col-sm-8">
                            <div class="form-group">
                                <input type="number" id="harga" name="harga" class="form-control" placeholder="Jumlah Harga" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                            <label for="kategori_id">Kategori Produk</label>
                        </div>
                        <div class="col-lg-4 col-md-10 col-sm-8">
                            <div class="form-group">
                                <select class="form-control show-tick" id="kategori_id" name="kategori_id" >
                                    <option value="">-- Tidak Ada --</option>
                                    @foreach($kategori as $kt)
                                    <option value="{{$kt->id}}">{{$kt->nama_kategori}}</option>
                                    @endforeach
                                </select>
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
                                <input type="text" id="tgl_berdiri" name="tgl_berdiri" class="form-control datetimepicker" data-weekends="false" autocomplete="off" placeholder="Please choose date & time...">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="save_produk" class="btn btn-default btn-round waves-effect"><i class="zmdi zmdi-upload zmdi-hc-lg"></i> Upload</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>