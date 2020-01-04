@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Data Kategori')
@section('subheader','Pengaturan Data Kategori')
@section('bread') <a href="">Data Kategori</a> @endsection

@push('style')
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">       
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Data Kategori</strong>   <small>Semua Kategori Terdaftar Pada Menu Ini</small> </h2><button type="button" class="btn btn-info waves-effect btn-sm pull"  onclick="modal_add()"><i class="zmdi zmdi-plus "></i> Tambah</button>
                       
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Jenis Vendor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $no=1;?>
                                @foreach($data as $m)
                                <tr>
                                	<td>{{$no++}}</td>
                                    <td>{{$m->nama_kategori}}</td>
                                    <td>{{$m->jenisvendor['nama_vendor']}}</td>
                                    <td> <a href="#" onclick="editKategori('{{$m->id}}','{{$m->nama_kategori}}','{{$m->jenisvendor['id']}}')" class="btn btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" onclick="confirmKategori('{{$m->id}}')" class="btn btn-danger btn-sm waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div align="right" class="pagination pagination-primary no-margin pull-right">{{$data->links()}}</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('backend.kategori.ar-form.kategori')
@endsection
@push('scriptbottom')
<script type="text/javascript">
    function modal_add() {
        $('#ar-modal-kategori').modal('show');
        $('.modal-backdrop').hide();
    }
    function confirmKategori(id) {
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
                url: "{{ url('data-kategori/del-kategori') }}"+'/'+id,
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
        });
    }
    function editKategori(id,nmKategori,jenisvendor_id) {
        $('#ar-modal-kategori').modal('show');
        $('.modal-backdrop').hide();    
        $('#ar-modal-form #id').val(id);
        $('#ar-modal-form #nm_kategori').val(nmKategori);
        $('#ar-modal-form #jenisvendor_id option[value='+ jenisvendor_id +']').prop("selected", true).change();
     } 
    // Simpan Data Kategori
        $('#save_kategori').on('click', function (e){
            var form = $('#ar-modal-form')[0];
            var data = new FormData(form);
            if ($('#ar-modal-kategori #id').val() == '') {
                var url  = "{{ url('data-kategori/save-kategori') }}";
            }
            else
            {
                var url  = "{{ url('data-kategori/edit-kategori') }}";
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
   
     $('#ar-modal-kategori').on('hidden.bs.modal', function(event){
         $(this).find('form')[0].reset();
     });
</script>
<!-- <script src="{{ asset('backend/assets/js/pages/forms/basic-form-elements.js')}}"></script> -->
@endpush