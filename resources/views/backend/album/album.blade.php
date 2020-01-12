@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Album')
@section('subheader','Semua Gambar '.$info->nama_toko)
@section('bread') <a href="">{{$info->nama_toko}}</a> @endsection

@push('style')
<link href="{{asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/plugins/light-gallery/css/lightgallery.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/custom-album.css')}}">
@endpush
@push('scripthead')
@endpush
@section('content')
<div class="container-fluid"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                         <button type="button" class="btn btn-info waves-effect btn-sm ull"  onclick="albumStore()"><i class="zmdi zmdi-plus "></i> Tambah</button>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_with_icon_title"> <i class="zmdi zmdi-collection-folder-image"></i> Album </a></li>
                            <li class="nav-item"><a class="nav-link" onclick="semuaGambar('{{$info->id}}')" data-toggle="tab" href="#profile_with_icon_title"><i class="zmdi zmdi-collection-image-o"></i> Semua </a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="home_with_icon_title">
                                <div  align="center" class="list-unstyled row clearfix">
                                    @foreach($album as $key => $albuma)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"><a href="#"> <span onclick="albumDetail('{{$albuma->id}}','{{$albuma->nama_album}}')"> <img class="img-fluid img-thumbnail" src="{{url('data-album/show-album/'.$albuma->vendor_id.'/'.$albuma->url_thumbnail)}}" alt=""> </span> </a><span class="judulAlbum">{{$albuma->nama_album}}</span></div>
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile_with_icon_title">
                                <div id="allImage"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
@section('modal')
    @include('backend.album.ar-form.album-img-store')
    @include('backend.album.ar-form.album-detail')
	@include('backend.album.ar-form.album-store')
    @include('backend.album.ar-form.album-store-edit')
@endsection
@push('scriptbottom')
<script src="{{asset('backend/assets/plugins/light-gallery/js/lightgallery-all.js')}}"></script>

<script type="text/javascript">
    function addImages() {
        $('#ar-modal-img-store').show();
        $('.modal-backdrop').hide();
        $('#largeModalLabel').html('Tambah Gambar');
        var idAlbum = $('#ar-modal-img-detail #idAlbum').val();
        var nmAlbum = $('#ar-modal-img-detail #nmAlbum').val();
        $('#ar-modal-img-store #id').val(idAlbum);
        $('#ar-modal-img-store #nama_album').val(nmAlbum);
    }
    function albumStore() {
        $('#largeModalLabel').html('Buat Album');
        $('#ar-modal-album-store').show();
        $('.modal-backdrop').hide();

    }
    function semuaGambar(id) {
        $.ajax({
            processData: true,
            contentType: false,
            cache: false,
            type: "GET",
            url: "{{ url('data-album/all-list-gambar') }}"+'/'+id,
            success : function(e) {
                var cekId = document.getElementById('aniimated-thumbnials1');
                if (cekId == null || cekId == 'undifined') {
                    $('#allImage').after('<div id="aniimated-thumbnials1" align="center" class="list-unstyled row clearfix"></div>');
                    for(var i=0;i<e.length;i++)
                    {
                      var link = "{{url('data-album/show-album')}}"+'/'+e[i].vendor_id+'/'+e[i].url_gambar;
                      var ext = e[i].url_gambar.toUpperCase();
                      if (ext.substr(-4) == ".MP4" || ext.substr(-4) == '.MKV' || ext.substr(-4) == '.3GP' )
                      {
                            $('#aniimated-thumbnials1').append('<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"><video width="100%" controls="controls" preload="metadata"><source src="'+link+'" type="video/mp4"></video><span class="judulAlbum"> '+e[i].nama_gambar+'</span></div>');
                      }
                      else{
                            $('#aniimated-thumbnials1').append('<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"><a href="'+link+'"  > <img class="img-fluid img-thumbnail" src="'+link+'" alt=""> <span class="judulAlbum"> '+e[i].nama_gambar+'</span></a></div>');
                      }
                    }
                    $('#aniimated-thumbnials1').lightGallery({
                                thumbnail: true,
                                selector: 'a'
                            });
                }
            },
            error : function(e){
             showErrorMessage();
            }
        });
    }
    function albumDetail(id,album) {
        $.ajax({
            processData: true,
            contentType: false,
            cache: false,
            type: "GET",
            url: "{{ url('data-album/list-gambar') }}"+'/'+id,
            success : function(e) {
                if (e == null || e == '') {
                    swal({
                        title: "Tidak ada gambar di album ini",
                        text: "Apakah anda ingin menambahkan gambar ?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, add a picture",
                        closeOnConfirm: false,
                        cancelButtonText: "No, open the album",
                        closeOnCancel: true
                        }, function (confirmButtonText) {
                            if (confirmButtonText == true) {
                                swal.close();
                                $('#ar-modal-img-store #largeModalLabel').html('Tambahkan Gambar untuk '+album);
                                $('#ar-modal-img-store #id').val(id);
                                $('#ar-modal-img-store #nama_album').val(album);
                                $('#ar-modal-img-store').show();
                            }
                            else{
                                $('#ar-modal-img-detail #largeModalLabel').html(album +' &nbsp;<div class="close"><span onclick="delAlbum('+id+')" class="zmdi zmdi-delete text-danger" title="Hapus Album dan semua Gambar"></span>&nbsp;<span class="text-success zmdi zmdi-edit" onclick="editAlbum('+id+')"  title="edit album"></span></div>');
                                $('#ar-modal-img-detail #idAlbum').val(id);
                                $('#ar-modal-img-detail #nmAlbum').val(album);
                                $('#ar-modal-img-detail').show();
                            }
                        });
                }
                else{
                    $('#ar-modal-img-detail #largeModalLabel').html(album +' &nbsp;<div class="close"><span onclick="delAlbum('+id+')" class="zmdi zmdi-delete text-danger" title="Hapus Album dan semua Gambar"></span>&nbsp;<span class="text-success zmdi zmdi-edit" onclick="editAlbum('+id+')"  title="edit album"></span></div>');
                    $('#ar-modal-img-detail #idAlbum').val(id);
                    $('#ar-modal-img-detail #nmAlbum').val(album);
                    $('#imagesList').after('<div id="aniimated-thumbnials" align="center" class="list-unstyled row clearfix"></div>');
                    for(var i=0;i<e.length;i++)
                    {
                      var link = "{{url('data-album/show-album')}}"+'/'+e[i].vendor_id+'/'+e[i].url_gambar;
                      var ext = e[i].url_gambar.toUpperCase();
                      if (ext.substr(-4) == ".MP4" || ext.substr(-4) == '.MKV' || ext.substr(-4) == '.3GP' )
                      {
                        $('#aniimated-thumbnials').append('<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 m-b-20"><video width="100%" controls="controls" preload="metadata"><source src="'+link+'" type="video/mp4"></video><span class="judulAlbum" onclick="editJudulGambar('+e[i].id+','+id+',\''+album+'\',\''+e[i].nama_gambar+'\')" title="edit judul"> '+e[i].nama_gambar+'</span><button class="btnHapus zmdi zmdi-delete text-danger" onclick="delImages('+e[i].id+','+id+',\''+album+'\')" title="Hapus Gambar"></button></div>');

                      }
                      else{
                        $('#aniimated-thumbnials').append('<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 m-b-20"><a href="'+link+'"  > <img class="img-fluid img-thumbnail" src="'+link+'" alt=""> </a><span class="judulAlbum" onclick="editJudulGambar('+e[i].id+','+id+',\''+album+'\',\''+e[i].nama_gambar+'\')" title="edit judul"> '+e[i].nama_gambar+'</span><button class="btnHapus zmdi zmdi-delete text-danger" onclick="delImages('+e[i].id+','+id+',\''+album+'\')" title="Hapus Gambar"></button></div>');
                      }
                    }
                    $('#aniimated-thumbnials').lightGallery({
                        thumbnail: true,
                        selector: 'a'
                    });
                    $('#ar-modal-img-detail').show();
                }
                $('.modal-backdrop').hide();
            },
            error : function(e){
             showErrorMessage();
            }
        });
    }

    function editJudulGambar(idimages,idAlbum,nmAlbum,oldJudul) {
        swal({
            title: "Ganti Keterangan Gambar",
            text: "Sesuaikan dengan isi gambar..",
            type: "input",
            inputValue: oldJudul,
            showCancelButton: true,
            closeOnConfirm: false,
            animation: "slide-from-top",
            inputPlaceholder: "Write something"
        }, function (inputValue) {
            if (inputValue === false) return false;
            if (inputValue === "") {
                swal.showInputError("You need to write something!"); return false
            }
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('#ar-modal-img-detail input[name="_token"]').val()},
                    type: "POST",
                    url: "{{ url('data-album/edit-judul-gambar') }}",
                    timeout: 3000,
                    data:{id:idimages,judul:inputValue},
                    success : function(e) {
                        if (e = 1) {
                            showSuccessMessage();
                            $('#ar-modal-img-detail').hide();
                            $('#aniimated-thumbnials').remove();
                            albumDetail(idAlbum,nmAlbum);
                        }
                        else{
                            swal("Oops!", "Gagal Edit Judul.", "warning");
                        }
                    },
                    error : function(e){
                        showErrorUrl();
                    }
                });
        });
    }

    function editAlbum(idAlbum) {
        $.ajax({
                processData: false,
                contentType: false,
                cache: false,
                type: "GET",
                enctype: 'multipart/form-data',
                url: "{{ url('data-album/get-edit-album') }}"+'/'+idAlbum,
                timeout: 600000,
                success : function(e) {
                    $('#ar-modal-album-store #id').val(idAlbum);
                    $('#ar-modal-album-store #nama_album').val(e.nama_album);
                    $('#ar-modal-album-store #title_gambar').val(e.title);
                    $('#ar-modal-album-store #keterangan').val(e.keterangan);
                    $('#ar-modal-album-store').show();
                    $('.modal-backdrop').hide();
                },
                error : function(e){
                 showErrorUrl();
                }
            });
    }

    function delImages(idGambar,idAlbum,nmAlbum) {
        swal({
            title: "Are you sure?",
            text: "Gambar tidak dapat dikembalikan lagi !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
            }, function () {
                    $.ajax({
                    headers: {'X-CSRF-TOKEN': $('#ar-form-store input[name="_token"]').val()},
                    type: "POST",
                    url: "{{ url('data-album/del-image') }}"+'/'+idGambar,
                    timeout: 3000,
                    success : function(e) {
                        if (e = 1) {
                            showSuccessMessage();
                            $('#aniimated-thumbnials').remove();
                            $('#ar-modal-img-detail').hide();
                            setTimeout(function(){ albumDetail(idAlbum,nmAlbum); }, 1500);
                        }
                        else{
                            swal("Oops!", "Gagal Menghapus Data Gambar.", "warning");
                        }
                    },
                    error : function(e){
                        showErrorUrl();
                    }
                    });
            });
    }

    function delAlbum(idAlbum) {
        swal({
            title: "Are you sure?",
            text: "Menghapus album akan menghapus semua gambar didalam album tersebut !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
            }, function () {
                    $.ajax({
                    headers: {'X-CSRF-TOKEN': $('#ar-form-store input[name="_token"]').val()},
                    type: "POST",
                    url: "{{ url('data-album/del-album') }}"+'/'+idAlbum,
                    timeout: 3000,
                    success : function(e) {
                        if (e = 1) {
                            ShowAlertDeletedWithReload();
                        }
                        else{
                            swal("Oops!", "Gagal Menghapus Data Album.", "warning");
                        }
                    },
                    error : function(e){
                        showErrorUrl();
                    }
                    });
            });
    }

    function hideModal(id) {
        $('#'+id).hide();
        var getId = document.getElementsByClassName("aniimated-thumbnials");
        if (getId != null || getId != 'undifined') {
            if (id == "ar-modal-img-detail") {
                $('#aniimated-thumbnials').remove();
            }
        }
    }

    // Simpan Data Produk
        $('#save_album').on('click', function (e){
            var form = $('#ar-form-store')[0];
            var data = new FormData(form);
            if ($('#ar-form-store #id').val() == '') {
                var url  = "{{ url('data-album/save-album') }}";
            }
            else
            {
                var url  = "{{ url('data-album/edit-album') }}";
            }
            $.ajax({
                processData: false,
                contentType: false,
                cache: false,
                type: "POST",
                enctype: 'multipart/form-data',
                url: url,
                data: data,
                timeout: 600000,
                success : function(e) {
                    if (e == 1) {
                        showAjaxLoaderSuccesMessage();
                        document.getElementById("ar-form-store").reset();
                    }
                    else
                    {
                        showErrorMessageWithTitle(e);
                    }                  
                },
                error : function(e){
                 showErrorUrl();
                }
            });
        });
    // Batas
    // Simpan Data Produk
        $('#save_images').on('click', function (e){
            var idAlbum= $('#ar-form-store-img #id').val();
            var vendor = $('#ar-form-store-img #nama_album').val();
            var form = $('#ar-form-store-img')[0];
            var data = new FormData(form);
            if ($('#ar-form-store #id').val() == '') {
                var url  = "{{ url('data-album/save-images') }}";
            }
            else
            {
                var url  = "{{ url('data-album/edit-images') }}";
            }
            $.ajax({
                processData: false,
                contentType: false,
                cache: false,
                type: "POST",
                enctype: 'multipart/form-data',
                url: url,
                data: data,
                timeout: 600000,
                success : function(e) {
                    if (e == 1) {
                        showSuccessMessage();
                        document.getElementById("ar-form-store-img").reset();
                        $('#ar-modal-img-store').hide();
                        $('#ar-modal-img-detail').hide();
                        $('#aniimated-thumbnials').remove();
                        albumDetail(idAlbum,vendor);
                    }
                    else
                    {
                        showErrorMessageWithTitle(e);
                    }                  
                },
                error : function(e){
                 showErrorUrl();
                }
            });
        });
    // Batas
</script>
@endpush