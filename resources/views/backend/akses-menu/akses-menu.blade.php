@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Akses Menu')
@section('subheader','Pengaturan Menu Akses')
@section('bread') <a href="">Akses Menu</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">       
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Main Menu</strong>   <small>Setting akses untuk main menu</small> </h2><button type="button" class="btn btn-info waves-effect btn-sm pull"  onclick="modal_add_menu()"><i class="zmdi zmdi-plus "></i> Tambah</button>
                       
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Menu</th>
                                    <th>Akses Group</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mainmenu as $m)
                                <tr>
                                    <td>{{$m->menu->nama}}</td>
                                    <td>{{$m->akses_group->nama}}</td>
                                    <td> <a href="#" onclick="editMenu('{{$m->id}}')" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" onclick="confirmMenu('{{$m->id}}')" class="btn btn-danger btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div align="right" class="pagination pagination-info no-margin pull-right">{{$mainmenu->links()}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Sub Menu</strong>  <small>Setting akses untuk sub menu</small> </h2>
                        <button type="button" class="btn btn-info waves-effect btn-sm"  onclick="modal_add_sub_menu()"><i class="zmdi zmdi-plus "></i> Tambah</button>

                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Sub Menu</th>
                                    <th>Akses Group</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submenus as $m)
                                <tr>
                                    <td>{{$m->menu->nama}}</td>
                                    <td>{{$m->akses_group->nama}}</td>
                                    <td> <a href="#" onclick="editSubMenu('{{$m->id}}')" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" onclick="confirmSubMenu('{{$m->id}}')" class="btn btn-danger btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <div align="right" class="pagination pagination-primary no-margin pull-right">{{$submenus->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('backend.akses-menu.ar-form.akses-menu')
    @include('backend.akses-menu.ar-form.akses-sub-menu')
@endsection
@push('scriptbottom')
<script type="text/javascript">
    function modal_add_menu() {
        $('#ar-modal-menu').modal('show');
        $('.modal-backdrop').hide();
    }
    function modal_add_sub_menu() {
       $('#ar-modal-sub-menu').modal('show');
        $('.modal-backdrop').hide();    
    }
    function confirmMenu(id) {
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
                headers: {'X-CSRF-TOKEN': $('#ar-modal-form input[name="_token"]').val()},
                type: "POST",
                url: "{{ url('akses-menu/del-main') }}"+'/'+id,
                timeout: 600000,
                success : function(e) {
                    setTimeout(function () {
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        location.reload();
                    }, 2000);
                },
                error : function(e){
                    showErrorMessage();
                }
                });
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
    }
    function confirmSubMenu(id) {
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
                headers: {'X-CSRF-TOKEN': $('#ar-modal-form-sub-menu input[name="_token"]').val()},
                type: "POST",
                url: "{{ url('akses-menu/del-submenu') }}"+'/'+id,
                timeout: 600000,
                success : function(e) {
                    setTimeout(function () {
                        swal("Deleted!", "Your file has been deleted.", "success");
                        location.reload();
                    }, 2000);
                },
                error : function(e){
                    showErrorMessage();
                }
                });
            swal("Deleted!", "Your file has been deleted.", "success");
        });
    }
    function editMenu(id) {
        $('#ar-modal-menu').modal('show');
        $('.modal-backdrop').hide();    

        var url  = "{{ url('akses-menu/show-main') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {
              $('#ar-modal-menu #menu_id').removeAttr("multiple", '');
              $('#ar-modal-form #id').val(e.id);
              $('#ar-modal-form #menu_id option[value='+ e.menu_id +']').prop("selected", true).change();
              $('#ar-modal-form #akses_group_id option[value='+ e.akses_group_id +']').prop("selected", true).change();
            },
            error : function(e){
             showErrorMessage();
            }
        });
     } 
    function editSubMenu(id) {
        $('#ar-modal-sub-menu').modal('show');
        $('.modal-backdrop').hide();    

        var url  = "{{ url('akses-menu/show-submenu') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {
              $('#ar-modal-form-sub-menu #menu_id').removeAttr("multiple", '');
              $('#ar-modal-form-sub-menu #id').val(e.id);
              $('#ar-modal-form-sub-menu #submenu_id option[value='+ e.menu_id +']').prop("selected", true).change();
              $('#ar-modal-form-sub-menu #akses_group_id option[value='+ e.akses_group_id +']').prop("selected", true).change();
            },
            error : function(e){
             showErrorMessage();
            }
        });
     } 
    // Simpan Data Menu
        $('#save_menu').on('click', function (e){
            var form = $('#ar-modal-form')[0];
            var data = new FormData(form);
            if ($('#ar-modal-menu #id').val() == '') {
                var url  = "{{ url('akses-menu/save-main') }}";
            }
            else
            {
                var url  = "{{ url('akses-menu/edit-main') }}";
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
                        showErrorMessage();
                    }                  
                },
                error : function(e){
                 showErrorMessage();
                }
            });
        });
    // Batas
    // Simpan Data Sub Menu
        $('#save_submenu').on('click', function (e){
            var form = $('#ar-modal-form-sub-menu')[0];
            var data = new FormData(form);
            if ($('#ar-modal-form-sub-menu #id').val() == '') {
                var url  = "{{ url('akses-menu/save-submenu') }}";
            }
            else
            {
                var url  = "{{ url('akses-menu/edit-submenu') }}";
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
                        document.getElementById("ar-modal-form-sub-menu").reset();
                        showAjaxLoaderSuccesMessage();
                    }
                    else
                    {
                        showErrorMessage();
                    }                  
                },
                error : function(e){
                 showErrorMessage();
                }
            });
        });
    // Batas

     $('#ar-modal-menu').on('hidden.bs.modal', function(event){
         $(this).find('form')[0].reset();
          $('#ar-modal-menu #menu_id').attr("multiple", '');

     });
     $('#ar-modal-sub-menu').on('hidden.bs.modal', function(event){
         $(this).find('form')[0].reset();
        $('#ar-modal-form-sub-menu #menu_id').attr("multiple", '');
     });
</script>
<!-- <script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script> -->
@endpush