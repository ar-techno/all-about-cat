<?php use App\menu; ?>
@extends('layouts.backend.app')
@section('title', 'Setting Manu')
@section('header','Setting Menu')
@section('subheader','Pengaturan Data Menu Master')
@section('bread') <a href="">Menu</a> @endsection

@push('style')
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/nestable/jquery-nestable.css')}}"/>
<link href="{{ asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">      
        <div class="row clearfix"> 
            <!-- Spinners -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Tambah Menu</strong> <small></small> </h2>
                    </div>
                    <div class="body">
                    	<form class="form-horizontal" id="ar-modal-form-menu">
                    		{{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="nama_menu">Nama Menu</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="number" id="id" name="id" class="form-control" hidden >
                                        <input type="text" id="nama_menu" name="nama_menu" class="form-control" placeholder="Nama Menu" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="password_2">Group Menu</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
		                              	<select class="form-control show-tick" id="group_menu" name="group_menu">
		                                    <option value="">-- Tidak Ada --</option>
		                              		@foreach($data as $m)
		                                    <option value="{{$m->id}}">{{$m->nama}}</option>
		                              		@endforeach
		                                </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="password_2">Jenis Vendor</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
		                              	<select class="form-control show-tick" id="id_vendor" name="id_vendor">
		                                    <option value="">-- Tidak Ada --</option>
		                              		@foreach($vendor as $m)
		                                    <option value="{{$m->id}}">{{$m->nama_vendor}}</option>
		                              		@endforeach
		                                </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="link_menu">Link</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="link" name="link" class="form-control" placeholder="Link / Url Menu ex( menu )" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="icon_menu">Icon</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="icon_menu" name="icon_menu" class="form-control" placeholder="Icon" required>
                                    </div>
                                    <div class="row  demo-icon-container" style="font-size: 10px;height: 250px;overflow: auto;">
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">3d_rotation</i> <span class="icon-name">3d_rotation</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">accessibility</i> <span class="icon-name">accessibility</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">accessible</i> <span class="icon-name">accessible</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">account_balance</i> <span class="icon-name">account_balance</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">account_balance_wallet</i> <span class="icon-name">account_balance_wallet</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">account_box</i> <span class="icon-name">account_box</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">account_circle</i> <span class="icon-name">account_circle</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add_shopping_cart</i> <span class="icon-name">add_shopping_cart</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">alarm</i> <span class="icon-name">alarm</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">alarm_add</i> <span class="icon-name">alarm_add</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">alarm_off</i> <span class="icon-name">alarm_off</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">alarm_on</i> <span class="icon-name">alarm_on</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">all_out</i> <span class="icon-name">all_out</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">android</i> <span class="icon-name">android</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">announcement</i> <span class="icon-name">announcement</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">aspect_ratio</i> <span class="icon-name">aspect_ratio</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">assessment</i> <span class="icon-name">assessment</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">assignment</i> <span class="icon-name">assignment</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">assignment_ind</i> <span class="icon-name">assignment_ind</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">assignment_late</i> <span class="icon-name">assignment_late</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">assignment_return</i> <span class="icon-name">assignment_return</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">assignment_returned</i> <span class="icon-name">assignment_returned</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">assignment_turned_in</i> <span class="icon-name">assignment_turned_in</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">autorenew</i> <span class="icon-name">autorenew</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">backup</i> <span class="icon-name">backup</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">book</i> <span class="icon-name">book</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"><i class="zmdi zmdi-bookmark"></i> <span class="icon-name">bookmark</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">bookmark_border</i> <span class="icon-name">bookmark_border</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">bug_report</i> <span class="icon-name">bug_report</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">build</i> <span class="icon-name">build</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">cached</i> <span class="icon-name">cached</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">camera_enhance</i> <span class="icon-name">camera_enhance</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">card_giftcard</i> <span class="icon-name">card_giftcard</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">card_membership</i> <span class="icon-name">card_membership</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">card_travel</i> <span class="icon-name">card_travel</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">change_history</i> <span class="icon-name">change_history</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">check_circle</i> <span class="icon-name">check_circle</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">chrome_reader_mode</i> <span class="icon-name">chrome_reader_mode</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">class</i> <span class="icon-name">class</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">code</i> <span class="icon-name">code</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">compare_arrows</i> <span class="icon-name">compare_arrows</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">copyright</i> <span class="icon-name">copyright</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">credit_card</i> <span class="icon-name">credit_card</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">dashboard</i> <span class="icon-name">dashboard</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">date_range</i> <span class="icon-name">date_range</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">delete</i> <span class="icon-name">delete</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">delete_forever</i> <span class="icon-name">delete_forever</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">description</i> <span class="icon-name">description</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">dns</i> <span class="icon-name">dns</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">done</i> <span class="icon-name">done</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">done_all</i> <span class="icon-name">done_all</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">donut_large</i> <span class="icon-name">donut_large</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">donut_small</i> <span class="icon-name">donut_small</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">eject</i> <span class="icon-name">eject</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">euro_symbol</i> <span class="icon-name">euro_symbol</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">event</i> <span class="icon-name">event</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">event_seat</i> <span class="icon-name">event_seat</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">exit_to_app</i> <span class="icon-name">exit_to_app</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">explore</i> <span class="icon-name">explore</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">extension</i> <span class="icon-name">extension</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="zmdi zmdi-face"></i> <span class="icon-name">face</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">favorite</i> <span class="icon-name">favorite</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">favorite_border</i> <span class="icon-name">favorite_border</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">feedback</i> <span class="icon-name">feedback</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">find_in_page</i> <span class="icon-name">find_in_page</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">find_replace</i> <span class="icon-name">find_replace</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fingerprint</i> <span class="icon-name">fingerprint</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">flight_land</i> <span class="icon-name">flight_land</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">flight_takeoff</i> <span class="icon-name">flight_takeoff</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">flip_to_back</i> <span class="icon-name">flip_to_back</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">flip_to_front</i> <span class="icon-name">flip_to_front</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">g_translate</i> <span class="icon-name">g_translate</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">gavel</i> <span class="icon-name">gavel</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">get_app</i> <span class="icon-name">get_app</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">gif</i> <span class="icon-name">gif</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">grade</i> <span class="icon-name">grade</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">group_work</i> <span class="icon-name">group_work</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">help</i> <span class="icon-name">help</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">help_outline</i> <span class="icon-name">help_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">highlight_off</i> <span class="icon-name">highlight_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">history</i> <span class="icon-name">history</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">home</i> <span class="icon-name">home</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">hourglass_empty</i> <span class="icon-name">hourglass_empty</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">hourglass_full</i> <span class="icon-name">hourglass_full</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">http</i> <span class="icon-name">http</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">https</i> <span class="icon-name">https</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">important_devices</i> <span class="icon-name">important_devices</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">info</i> <span class="icon-name">info</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">info_outline</i> <span class="icon-name">info_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">input</i> <span class="icon-name">input</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">invert_colors</i> <span class="icon-name">invert_colors</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">label</i> <span class="icon-name">label</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">label_outline</i> <span class="icon-name">label_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">language</i> <span class="icon-name">language</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">launch</i> <span class="icon-name">launch</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">lightbulb_outline</i> <span class="icon-name">lightbulb_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">line_style</i> <span class="icon-name">line_style</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">line_weight</i> <span class="icon-name">line_weight</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">list</i> <span class="icon-name">list</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">lock</i> <span class="icon-name">lock</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">lock_open</i> <span class="icon-name">lock_open</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">lock_outline</i> <span class="icon-name">lock_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">loyalty</i> <span class="icon-name">loyalty</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">markunread_mailbox</i> <span class="icon-name">markunread_mailbox</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">motorcycle</i> <span class="icon-name">motorcycle</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">note_add</i> <span class="icon-name">note_add</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">offline_pin</i> <span class="icon-name">offline_pin</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">opacity</i> <span class="icon-name">opacity</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">open_in_browser</i> <span class="icon-name">open_in_browser</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">open_in_new</i> <span class="icon-name">open_in_new</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">open_with</i> <span class="icon-name">open_with</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pageview</i> <span class="icon-name">pageview</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pan_tool</i> <span class="icon-name">pan_tool</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">payment</i> <span class="icon-name">payment</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_camera_mic</i> <span class="icon-name">perm_camera_mic</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_contact_calendar</i> <span class="icon-name">perm_contact_calendar</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_data_setting</i> <span class="icon-name">perm_data_setting</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_device_information</i> <span class="icon-name">perm_device_information</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_identity</i> <span class="icon-name">perm_identity</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_media</i> <span class="icon-name">perm_media</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_phone_msg</i> <span class="icon-name">perm_phone_msg</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">perm_scan_wifi</i> <span class="icon-name">perm_scan_wifi</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pets</i> <span class="icon-name">pets</span> </div>
										</div>
			                        </div>
			                    </div>
			                </div>

                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="password_2">Tampil</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
		                              	<select class="form-control show-tick" id="tampil" name="tampil">
		                                    <option value="">-- Tidak Ada --</option>
		                                    <option value="1">Ya</option>
		                                    <option value="0">Tidak</option>
		                                </select>
                                    </div>
                                </div>
                            </div>
			                <hr>
                            <div class="row clearfix">
                                <div class="col-sm-8 ">
                                    <button type="reset" class="btn btn-raised btn-warning btn-round waves-effect">Batal</button>
                                    <button type="button" id="save_menu" class="btn btn-raised btn-primary btn-round waves-effect">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #END# Spinners --> 
            <!-- Tags Input -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Susun</strong> Menu <small>Urutkan Data Menu Sesuai Kebutuhan</small> </h2>
                    </div>
                    <div class="body">

                    	<form class="form-horizontal" id="form-struktur-menu">
	                    	<div class="row clearfix">
                			<div class="nestable-with-handle col-lg-12 col-md-12 col-sm-12 dd " id="menu">
                                <ol class="dd-list">
                                @foreach($data as $m)
                                    <li class="dd-item dd3-item" data-id="{{$m->id}}">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                        	<a onclick="editMenu('{{$m->id}}')" >{{$m->nama}} <i class="zmdi zmdi-edit"></i></a>
                                        </div>
                                        <?php 
	                                    	$mainMenu=menu::whereNotNull('parent_menu_id')->where('parent_menu_id',$m->id)->where('tampil',1)->orderBy('posisi','asc')->get();
		                                    	
		                                    if (count($mainMenu) > 0) {?>
                                        	<ol class="dd-list">
                                            @foreach($mainMenu as $m)
	                                            <li class="dd-item dd3-item" data-id="{{$m->id}}">
	                                                <div class="dd-handle dd3-handle"></div>
	                                                <div class="dd3-content">
	                                                	<a onclick="editMenu('{{$m->id}}')" >{{$m->nama}} <i class="zmdi zmdi-edit"></i></a>
	                                                </div>
	                                            </li>
                                        	@endforeach
			                                </ol>
		                                <?php
		                                    }
		                                ?>
                                    </li>
                                @endforeach
                                </ol>
                                
                            </div>
	                    	</div>
	                    	<hr>
	                    	

	                        <div class="row clearfix">
	                        	<form class="form-list" method="post" action="{{ url('menu/update-struktur') }}">
	    						{{ csrf_field() }}
	    						<textarea cols="30" rows="3" name="output-list" id="output" class="form-control no-resize" readonly hidden></textarea>
	                                <div class="col-sm-8 ">
	                                    <button type="button" class="btn btn-raised btn-warning btn-round waves-effect">Batal</button>
	                                    <button type="button" id="save_struktur" class="btn btn-raised btn-primary btn-round waves-effect">Simpan</button>
	                                </div>
	    						</form>
	                        </div>
                    	</form>
                    </div>
                </div>
            </div>
            <!-- #END# Tags Input --> 
        </div>
    </div>
@endsection
@push('scriptbottom')
<script type="text/javascript">
	$(function(){
			var updateOutput = function(e){
				var list = e.length ? e : $(e.target),
					output = list.data('output');
				if(window.JSON){
					output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
				}
				else{
					output.val('JSON browser support required for this demo.');
				}
			};
			$('#menu').nestable().on('change', updateOutput);
			updateOutput($('#menu').data('output', $('#output')));
	});

	function editMenu(id) {
		var url  = "{{ url('data-menu/show-edit') }}"+'/'+id;
        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            type: "get",
            enctype: 'multipart/form-data',
            url: url,
            timeout: 600000,
            success : function(e) {
              $('#ar-modal-form-menu #id').val(e.id);
              $('#ar-modal-form-menu #nama_menu').val(e.nama);
              $('#ar-modal-form-menu #link').val(e.link);
              $('#ar-modal-form-menu #icon_menu').val(e.icon);
              $('#ar-modal-form-menu #group_menu option[value='+ e.parent_menu_id +']').prop("selected", true).change();
              $('#ar-modal-form-menu #id_vendor option[value='+ e.jenisvendor_id +']').prop("selected", true).change();

            },
            error : function(e){
             showErrorMessage();
            }
        });
	 } 

    // Simpan Data Menu
        $('#save_menu').on('click', function (e){
            var form = $('#ar-modal-form-menu')[0];
            var data = new FormData(form);
            if ($('#ar-modal-form-menu #id').val() == '') {
	            var url  = "{{ url('data-menu/save') }}";
            }
            else
            {
	            var url  = "{{ url('data-menu/edit') }}";
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
                        document.getElementById("ar-modal-form-menu").reset();
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
    // Simpan Data Struktur
        $('#save_struktur').on('click', function (e){
            var form = $('#form-struktur-menu')[0];
            var data = new FormData(form);
            var url  = "{{ url('data-menu/update-struktur') }}";
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

</script>
<script src="{{ asset('backend/assets/plugins/nestable/jquery.nestable.js')}}"></script> <!-- Jquery Nestable -->
<script src="{{ asset('backend/assets/js/pages/ui/sortable-nestable.js')}}"></script> 
@endpush