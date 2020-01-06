@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Produk')
@section('subheader','Pengaturan Produk Dijual')
@section('bread') <a href="">Produk</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/custom-produk.css')}}">
@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <button type="button" class="btn btn-info waves-effect btn-sm"  onclick="modal_add_show()"><i class="zmdi zmdi-plus "></i> Tambah</button>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped m-b-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th data-breakpoints="xs">Keterangan</th>
                                    <th data-breakpoints="xs">Harga</th>
                                    <th data-breakpoints="xs">Stock</th>
                                    <th data-breakpoints="xs">Kadaluarsa</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <div class="container" >
                                          <img  src="{{ asset('backend/assets/images/ecommerce/icon_upload.png')}}"  alt="Product img">
                                           <a class="btn " title="klik untuk upload gambar" onclick="modal_img_show('{{$d->id}}')"><i class="zmdi zmdi-cloud-upload"></i></a>
                                        </div>
                                    </td>
                                    <td>{{$d->nama_product}}</td>
                                    <td><span class="text-muted">{{substr($d->keterangan, 0, 50)}}</span></td>
                                    <td>{{toRupiah($d->harga)}}</td>
                                    <td><span class="col-green">{{$d->stock}}</span></td>
                                    <?php 
                                        $dateProduk = date('d/m/Y', gabungTGL($d->tgl_kadaluarsa));
                                        $dateNow    = date('d/m/Y');
                                    ?>

                                    <td title="@if($dateProduk == $dateNow) PRODUK INI KADALUARSA @else  @endif">
                                        <span class="@if($dateProduk == $dateNow) col-red @else col-green @endif">{{$d->tgl_kadaluarsa}}
                                        </span>
                                    </td>
                                    <td class="" style="display: table-cell;">
                                        <a href="#" onclick="modal_img_detail('{{$d->id}}','{{$info->id}}')" class="btn btn-xs waves-effect waves-float waves-green"><i class="zmdi zmdi-collection-image"></i></a>
                                        <a href="#" onclick="getShowProduk('{{$d->id}}')" class="btn btn-xs waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" onclick="delProduk('{{$d->id}}')" class="btn btn-xs waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
	@include('backend.produk.ar-form.produk')
    @include('backend.produk.ar-form.produk-img')
    @include('backend.produk.ar-form.produk-img-detail')
    @include('backend.produk.ar-form.produk-img-slideshow')
@endsection
@push('scriptbottom')
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script> 
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 
<script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script> 
<script src="{{ asset('backend/assets/bundles/footable.bundle.js')}}"></script>

<script type="text/javascript">
    'use strict';
    $(document).ready(function() {
        $('.table').footable({
            "paging": {
                "enabled": true
            },
            "sorting": {
                "enabled": true
            }
        });
    });

    $("#gambar").change(function(){
        $('#image_preview').html("");
        var getFile   = document.getElementById("gambar");
        for(var i=0;i<getFile.files.length;i++)
        {
            $('#image_preview').append('<div class="row clearfix"><div class="col-lg-4 col-md-2 col-sm-4 form-control-label"><label for="nama_produk"><img src="'+URL.createObjectURL(event.target.files[i])+'" class="rounded img-raised"></label></div><div class="col-lg-8 col-md-10 col-sm-8"><div class="form-group"><input type="text" class="form-control" value="'+event.target.files[i].name+'" readonly></div><div class="form-group"><textarea id="title_image" name="title_image[]" class="form-control" placeholder="Keterangan Gambar" required="" ></textarea></div></div></div><hr>');
        }
    });

    function modal_add_show() {
        $('#ar-modal-produk').modal('show');
        $('.modal-backdrop').hide();    
    }
    
    function getShowProduk(idProduk) {
        $('#ar-modal-produk').modal('show');
        $('.modal-backdrop').hide();
            $.ajax({
                processData: true,
                contentType: false,
                cache: false,
                type: "get",
                enctype: 'multipart/form-data',
                url: "{{ url('data-produk/ambil-produk') }}"+'/'+idProduk,
                timeout: 600000,
                success : function(e) {
                    $('#ar-modal-produk #id').val(e.id)
                    $('#ar-modal-produk #vendor_id').val(e.vendor_id)
                    $('#ar-modal-produk #nama_produk').val(e.nama_product)
                    $('#ar-modal-produk #keterangan').val(e.keterangan)
                    $('#ar-modal-produk #stok').val(e.stock)
                    $('#ar-modal-produk #harga').val(e.harga)
                    $('#ar-modal-produk #tgl_kdl').val(e.tgl_kadaluarsa)
                    $('#ar-modal-produk #kategori_id option[value='+ e.kategori_id +']').prop("selected", true).change();
                },
                error : function(e){
                 showErrorMessage();
                }
            });
    }

    function modal_img_show(id) {
        $('#ar-modal-img').modal('show');
        $('.modal-backdrop').hide();
        $('#ar-form-img #id').val(id); 
    }

    function modal_img_title(idimages,idProduk,vendorId,oldTitle) {
        swal({
            title: "Ganti Keterangan Gambar",
            text: "Sesuaikan dengan isi gambar..",
            type: "input",
            inputValue: oldTitle,
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
                    url: "{{ url('data-produk/edit-title-gambar') }}",
                    timeout: 3000,
                    data:{id:idimages,title:inputValue},
                    success : function(e) {
                        if (e = 1) {
                            showSuccessMessage();
                            $('#ar-modal-img-detail #image_show').remove();
                            modal_img_detail(idProduk,vendorId);
                        }
                        else{
                            swal("Oops!", "Gagal Edit Title.", "warning");
                        }
                    },
                    error : function(e){
                        showErrorMessage();
                    }
                });
        });
    }

    function modal_img_detail(idProduk,vendorId) {
        $.ajax({
            processData: true,
            contentType: false,
            cache: false,
            type: "GET",
            url: "{{ url('data-produk/list-gambar') }}"+'/'+idProduk,
            success : function(e) {
                if (e == null || e == '') {showWithTitleMessage();}
                else{
                    $('#ar-modal-img-detail').modal('show');
                    $('.modal-backdrop').hide();
                }
                $('#imagesList').after('<div id="image_show" class="list-unstyled row clearfix"></div>');
                for(var i=0;i<e.length;i++)
                {
                  var link = "{{url('data-produk/produk-gambar')}}"+'/'+vendorId+'/'+e[i].product_parent_id+'/'+e[i].gambar;
                  $('#image_show').append('<div id="'+e[i].id+'" class="img-wrap col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20 "><div class="close"><span onclick="delImages('+e[i].id+')" class="zmdi zmdi-delete text-danger" title="Hapus Gambar"></span>&nbsp;<span class="text-success zmdi zmdi-edit" onclick="modal_img_title('+e[i].id+','+idProduk+','+vendorId+',\'' + e[i].title_gambar + '\')" title="edit keterangan"></span>&nbsp;<span class="text-info zmdi zmdi-collection-image" onclick="slideImg('+idProduk+','+vendorId+','+e[i].product_parent_id+','+i+')"></span></div><img src="'+link+'" onclick="slideImg('+idProduk+','+vendorId+','+e[i].product_parent_id+','+i+')" class="img-fluid img-thumbnail" onmouseover="showTitle(\'' + e[i].title_gambar + '\')"  style="padding:10px;" ></div>');
                }
            },
            error : function(e){
             showErrorMessage();
            }
        });
    }

    function showTitle(title_gambar) {
        if (title_gambar == 'null' || title_gambar == '') {
            $('#ar-modal-img-detail #title_images').html('Tidak ada keterangan');
        }
        else{
            $('#ar-modal-img-detail #title_images').html(title_gambar);
        }
    }

    function slideImg(idProduk,vendorId,product_parent_id,noSlide) {
        $('#ar-modal-img-slider').modal('show');
        $('.modal-backdrop').hide();
        $.ajax({
            processData: true,
            contentType: false,
            cache: false,
            type: "GET",
            url: "{{ url('data-produk/list-gambar') }}"+'/'+idProduk,
            success : function(e) {
                $('#imagesShowList').after('<div id="image_show1" class="list-unstyled row clearfix"></div>');
                for(var i=0;i<e.length;i++){
                  var link = "{{url('data-produk/produk-gambar')}}"+'/'+vendorId+'/'+product_parent_id+'/'+e[i].gambar;
                  $('#image_show1').append('<div class="mySlides" style="display:none;    min-width: -webkit-fill-available;"><div class="numbertext">Gambar Ke '+(i+1)+'/'+e.length+'</div><img src="'+link+'" style="width:100%"></div>');
                }

                $('.caption-container').after('<div id="image_row" class="list-unstyled row clearfix"></div>');
                var data = e;
                for(var i=0;i<data.length;i++){
                    var link = "{{url('data-produk/produk-gambar')}}"+'/'+vendorId+'/'+product_parent_id+'/'+data[i].gambar;
                    $('#image_row').append('<div class="column"><img class="demo cursor" src="'+link+'" style="width:50px;height:50px;" onclick="currentSlide('+i+')" alt="'+data[i].title_gambar+'"></div>');
                }
                currentSlide(noSlide);
            },
            error : function(e){
             showErrorMessage();
            }
        });
    }

    function delImages(idimages) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
            }, function () {
                    $.ajax({
                    headers: {'X-CSRF-TOKEN': $('#ar-modal-img-detail input[name="_token"]').val()},
                    type: "POST",
                    url: "{{ url('data-produk/del-images') }}"+'/'+idimages,
                    timeout: 3000,
                    success : function(e) {
                        if (e = 1) {
                            ShowAlertDeletedSuccess();
                            $('#image_show #'+idimages).remove();       
                        }
                        else{
                            swal("Oops!", "Gagal Menghapus Data Gambar.", "warning");
                        }
                    },
                    error : function(e){
                        showErrorMessage();
                    }
                    });
            });
    }

    function delProduk(idProduk) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
            }, function () {
                    $.ajax({
                    headers: {'X-CSRF-TOKEN': $('#ar-modal-img-detail input[name="_token"]').val()},
                    type: "POST",
                    url: "{{ url('data-produk/del-produk') }}"+'/'+idProduk,
                    timeout: 3000,
                    success : function(e) {
                        if (e = 1) {
                            ShowAlertDeletedWithReload();
                        }
                        else{
                            swal("Oops!", "Gagal Menghapus Data Produk.", "warning");
                        }
                    },
                    error : function(e){
                        showErrorMessage();
                    }
                    });
            });
    }

    var slideIndex = 0;

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > (slides.length - 1)) {slideIndex = 0;}
        if (n < 1) {slideIndex = 0;}

        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }

        if (slides[slideIndex] != null) {
          slides[slideIndex].style.display = 'block';
          dots[slideIndex].className += " active";
          captionText.innerHTML = dots[slideIndex].alt != 'null' ? dots[slideIndex].alt : '-';
        }
    }

    // Simpan Data Produk
        $('#save_produk').on('click', function (e){
            var form = $('#ar-modal-form')[0];
            var data = new FormData(form);
            if ($('#ar-modal-produk #id').val() == '') {
                var url  = "{{ url('data-produk/save-produk') }}";
            }
            else
            {
                var url  = "{{ url('data-produk/edit-produk') }}";
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
                        document.getElementById("ar-modal-form").reset();
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

    // Simpan Data Gambar Produk
        $('#save_gambar').on('click', function (e){
            var form = $('#ar-form-img')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-produk/save-gambar-produk') }}";
            $('.page-loader-ajax').show();
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
                        document.getElementById("ar-form-img").reset();
                        showAjaxLoaderSuccesMessage();
                        $('.page-loader-ajax').hide();
                    }
                    else
                    {
                        showErrorMessage();
                        $('.page-loader-ajax').hide();
                    }                  
                },
                error : function(e){
                 showErrorMessage();
                 $('.page-loader-ajax').hide();
                }
            });
        });
    // Batas

    $('#ar-modal-img-detail').on('hidden.bs.modal', function(event){
      $('#ar-modal-img-detail #image_show').remove();
      $('#ar-modal-img-detail #title_images').html("");
    });
    $('#ar-modal-img-slider').on('hidden.bs.modal', function(event){
      $('#ar-modal-img-slider #image_show1').remove();
      $('#ar-modal-img-slider #image_row').remove();
    });
</script>
@endpush