@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Album')
@section('subheader','Semua Gambar '.$info->nama_toko)
@section('bread') <a href="">{{$info->nama_toko}}</a> @endsection

@push('style')
<link href="{{asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/plugins/light-gallery/css/lightgallery.css')}}">
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
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"><a href="#">{{$albuma->nama_album}} <span onclick="albumDetail('{{$albuma->id}}','{{$albuma->nama_album}}')"> <img class="img-fluid img-thumbnail" src="{{url('data-album/show-album/'.$albuma->vendor_id.'/'.$albuma->url_thumbnail)}}" alt=""> </span> </a></div>
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
@endsection
@push('scriptbottom')
<script src="{{asset('backend/assets/plugins/light-gallery/js/lightgallery-all.js')}}"></script>

<script type="text/javascript">
    $(function () {
        
    });
    function addImages() {
        $('#largeModalLabel').html('Tambah Gambar');
        $('#ar-modal-img-store').show();
        $('.modal-backdrop').hide();
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
                      $('#aniimated-thumbnials1').append('<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"><a href="'+link+'"  > <img class="img-fluid img-thumbnail" src="'+link+'" alt="">  '+e[i].nama_gambar+'</a></div>');
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
                    $('#largeModalLabel').html('Tambahkan Gambar untuk '+album);
                    $('#ar-modal-img-store').show();
                    $('#ar-modal-img-store #id').val(id);
                    $('#ar-modal-img-store #nama_album').val(album);
                }
                else{
                    $('#ar-modal-img-detail #largeModalLabel').html(album);
                    $('#ar-modal-img-detail').show();
                    $('#ar-modal-img-detail #idAlbum').val(id);
                    $('#ar-modal-img-detail #nmAlbum').val(album);
                }
                
                $('.modal-backdrop').hide();
                $('#imagesList').after('<div id="aniimated-thumbnials" align="center" class="list-unstyled row clearfix"></div>');
                for(var i=0;i<e.length;i++)
                {
                  var link = "{{url('data-album/show-album')}}"+'/'+e[i].vendor_id+'/'+e[i].url_gambar;
                  $('#aniimated-thumbnials').append('<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"><a href="'+link+'"  > <img class="img-fluid img-thumbnail" src="'+link+'" alt="">  '+e[i].nama_gambar+'</a></div>');
                }
                $('#aniimated-thumbnials').lightGallery({
                    thumbnail: true,
                    selector: 'a'
                });
            },
            error : function(e){
             showErrorMessage();
            }
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
                        document.getElementById("ar-form-store").reset();
                        showAjaxLoaderSuccesMessage();
                    }
                    else
                    {
                        showErrorMessageWithTitle(e);
                    }                  
                },
                error : function(e){
                 showErrorMessage();
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
                        document.getElementById("ar-form-store-img").reset();
                        showSuccessMessage();
                        $('#ar-modal-img-store').hide();
                        $('#ar-modal-img-detail').hide();
                        $('#aniimated-thumbnials').remove();
                        albumDetail(idAlbum,vendor)
                    }
                    else
                    {
                        showErrorMessageWithTitle(e);
                    }                  
                },
                error : function(e){
                 showErrorMessage();
                }
            });
        });
    // Batas
</script>
@endpush