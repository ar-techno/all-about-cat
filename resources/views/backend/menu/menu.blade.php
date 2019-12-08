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
                    	<form class="form-horizontal">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="nama_menu">Nama Menu</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="nama_menu" class="form-control" placeholder="Nama Menu" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="password_2">Group Menu</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
		                              	<select class="form-control show-tick">
		                                    <option value="">-- Tidak Ada --</option>
		                                    <option value="10">Data Master</option>
		                                    <option value="20">E-Commers</option>
		                                    <option value="30">Adoption</option>
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
                                        <input type="text" id="col" class="form-control" placeholder="Link / Url Menu ex( menu )" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-2 col-sm-4 form-control-label">
                                    <label for="icon_menu">Icon</label>
                                </div>
                                <div class="col-lg-9 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="icon_menu" class="form-control" placeholder="Icon" required>
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
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">picture_in_picture</i> <span class="icon-name">picture_in_picture</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">picture_in_picture_alt</i> <span class="icon-name">picture_in_picture_alt</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">play_for_work</i> <span class="icon-name">play_for_work</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">polymer</i> <span class="icon-name">polymer</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">power_settings_new</i> <span class="icon-name">power_settings_new</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pregnant_woman</i> <span class="icon-name">pregnant_woman</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">print</i> <span class="icon-name">print</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">query_builder</i> <span class="icon-name">query_builder</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">question_answer</i> <span class="icon-name">question_answer</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">receipt</i> <span class="icon-name">receipt</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">record_voice_over</i> <span class="icon-name">record_voice_over</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">redeem</i> <span class="icon-name">redeem</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">remove_shopping_cart</i> <span class="icon-name">remove_shopping_cart</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">reorder</i> <span class="icon-name">reorder</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">report_problem</i> <span class="icon-name">report_problem</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">restore</i> <span class="icon-name">restore</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">restore_page</i> <span class="icon-name">restore_page</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">room</i> <span class="icon-name">room</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">rounded_corner</i> <span class="icon-name">rounded_corner</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">rowing</i> <span class="icon-name">rowing</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">schedule</i> <span class="icon-name">schedule</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">search</i> <span class="icon-name">search</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings</i> <span class="icon-name">settings</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_applications</i> <span class="icon-name">settings_applications</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_backup_restore</i> <span class="icon-name">settings_backup_restore</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_bluetooth</i> <span class="icon-name">settings_bluetooth</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_brightness</i> <span class="icon-name">settings_brightness</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_cell</i> <span class="icon-name">settings_cell</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_ethernet</i> <span class="icon-name">settings_ethernet</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_input_antenna</i> <span class="icon-name">settings_input_antenna</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_input_component</i> <span class="icon-name">settings_input_component</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_input_composite</i> <span class="icon-name">settings_input_composite</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_input_hdmi</i> <span class="icon-name">settings_input_hdmi</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_input_svideo</i> <span class="icon-name">settings_input_svideo</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_overscan</i> <span class="icon-name">settings_overscan</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_phone</i> <span class="icon-name">settings_phone</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_power</i> <span class="icon-name">settings_power</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_remote</i> <span class="icon-name">settings_remote</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_voice</i> <span class="icon-name">settings_voice</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">shop</i> <span class="icon-name">shop</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">shop_two</i> <span class="icon-name">shop_two</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">shopping_basket</i> <span class="icon-name">shopping_basket</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"><i class="zmdi zmdi-shopping-cart"></i><span class="icon-name">shopping_cart</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">speaker_notes</i> <span class="icon-name">speaker_notes</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">speaker_notes_off</i> <span class="icon-name">speaker_notes_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">spellcheck</i> <span class="icon-name">spellcheck</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">star_rate</i> <span class="icon-name">star_rate</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">stars</i> <span class="icon-name">stars</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">store</i> <span class="icon-name">store</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">subject</i> <span class="icon-name">subject</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">supervisor_account</i> <span class="icon-name">supervisor_account</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">swap_horiz</i> <span class="icon-name">swap_horiz</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">swap_vert</i> <span class="icon-name">swap_vert</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">swap_vertical_circle</i> <span class="icon-name">swap_vertical_circle</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">system_update_alt</i> <span class="icon-name">system_update_alt</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">tab</i> <span class="icon-name">tab</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">tab_unselected</i> <span class="icon-name">tab_unselected</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">theaters</i> <span class="icon-name">theaters</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">thumb_down</i> <span class="icon-name">thumb_down</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">thumb_up</i> <span class="icon-name">thumb_up</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">thumbs_up_down</i> <span class="icon-name">thumbs_up_down</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">timeline</i> <span class="icon-name">timeline</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">toc</i> <span class="icon-name">toc</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">today</i> <span class="icon-name">today</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">toll</i> <span class="icon-name">toll</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">touch_app</i> <span class="icon-name">touch_app</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">track_changes</i> <span class="icon-name">track_changes</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">translate</i> <span class="icon-name">translate</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">trending_down</i> <span class="icon-name">trending_down</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">trending_flat</i> <span class="icon-name">trending_flat</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">trending_up</i> <span class="icon-name">trending_up</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">turned_in</i> <span class="icon-name">turned_in</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">turned_in_not</i> <span class="icon-name">turned_in_not</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">update</i> <span class="icon-name">update</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">verified_user</i> <span class="icon-name">verified_user</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_agenda</i> <span class="icon-name">view_agenda</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_array</i> <span class="icon-name">view_array</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_carousel</i> <span class="icon-name">view_carousel</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_column</i> <span class="icon-name">view_column</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_day</i> <span class="icon-name">view_day</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_headline</i> <span class="icon-name">view_headline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_list</i> <span class="icon-name">view_list</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_module</i> <span class="icon-name">view_module</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_quilt</i> <span class="icon-name">view_quilt</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_stream</i> <span class="icon-name">view_stream</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">view_week</i> <span class="icon-name">view_week</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">visibility</i> <span class="icon-name">visibility</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">visibility_off</i> <span class="icon-name">visibility_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">watch_later</i> <span class="icon-name">watch_later</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">work</i> <span class="icon-name">work</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">youtube_searched_for</i> <span class="icon-name">youtube_searched_for</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">zoom_in</i> <span class="icon-name">zoom_in</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">zoom_out</i> <span class="icon-name">zoom_out</span> </div>
										</div>

										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add_alert</i> <span class="icon-name">add_alert</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">error</i> <span class="icon-name">error</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">error_outline</i> <span class="icon-name">error_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">warning</i> <span class="icon-name">warning</span> </div>
										</div>


										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add_to_queue</i> <span class="icon-name">add_to_queue</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">airplay</i> <span class="icon-name">airplay</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">album</i> <span class="icon-name">album</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">art_track</i> <span class="icon-name">art_track</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">av_timer</i> <span class="icon-name">av_timer</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">branding_watermark</i> <span class="icon-name">branding_watermark</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_to_action</i> <span class="icon-name">call_to_action</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">closed_caption</i> <span class="icon-name">closed_caption</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">equalizer</i> <span class="icon-name">equalizer</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">explicit</i> <span class="icon-name">explicit</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fast_forward</i> <span class="icon-name">fast_forward</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fast_rewind</i> <span class="icon-name">fast_rewind</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">featured_play_list</i> <span class="icon-name">featured_play_list</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">featured_video</i> <span class="icon-name">featured_video</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fiber_dvr</i> <span class="icon-name">fiber_dvr</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fiber_manual_record</i> <span class="icon-name">fiber_manual_record</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fiber_new</i> <span class="icon-name">fiber_new</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fiber_pin</i> <span class="icon-name">fiber_pin</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">fiber_smart_record</i> <span class="icon-name">fiber_smart_record</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">forward_10</i> <span class="icon-name">forward_10</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">forward_30</i> <span class="icon-name">forward_30</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">forward_5</i> <span class="icon-name">forward_5</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">games</i> <span class="icon-name">games</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">hd</i> <span class="icon-name">hd</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">hearing</i> <span class="icon-name">hearing</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">high_quality</i> <span class="icon-name">high_quality</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">library_add</i> <span class="icon-name">library_add</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">library_books</i> <span class="icon-name">library_books</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">library_music</i> <span class="icon-name">library_music</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">loop</i> <span class="icon-name">loop</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">mic</i> <span class="icon-name">mic</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">mic_none</i> <span class="icon-name">mic_none</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">mic_off</i> <span class="icon-name">mic_off</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">movie</i> <span class="icon-name">movie</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">music_video</i> <span class="icon-name">music_video</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">new_releases</i> <span class="icon-name">new_releases</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">not_interested</i> <span class="icon-name">not_interested</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">note</i> <span class="icon-name">note</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pause</i> <span class="icon-name">pause</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pause_circle_filled</i> <span class="icon-name">pause_circle_filled</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pause_circle_outline</i> <span class="icon-name">pause_circle_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">play_arrow</i> <span class="icon-name">play_arrow</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">play_circle_filled</i> <span class="icon-name">play_circle_filled</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">play_circle_outline</i> <span class="icon-name">play_circle_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">playlist_add</i> <span class="icon-name">playlist_add</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">playlist_add_check</i> <span class="icon-name">playlist_add_check</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">playlist_play</i> <span class="icon-name">playlist_play</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">queue</i> <span class="icon-name">queue</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">queue_music</i> <span class="icon-name">queue_music</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">queue_play_next</i> <span class="icon-name">queue_play_next</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">radio</i> <span class="icon-name">radio</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">recent_actors</i> <span class="icon-name">recent_actors</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">remove_from_queue</i> <span class="icon-name">remove_from_queue</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">repeat</i> <span class="icon-name">repeat</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">repeat_one</i> <span class="icon-name">repeat_one</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">replay</i> <span class="icon-name">replay</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">replay_10</i> <span class="icon-name">replay_10</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">replay_30</i> <span class="icon-name">replay_30</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">replay_5</i> <span class="icon-name">replay_5</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">shuffle</i> <span class="icon-name">shuffle</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">skip_next</i> <span class="icon-name">skip_next</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">skip_previous</i> <span class="icon-name">skip_previous</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">slow_motion_video</i> <span class="icon-name">slow_motion_video</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">snooze</i> <span class="icon-name">snooze</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sort_by_alpha</i> <span class="icon-name">sort_by_alpha</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">stop</i> <span class="icon-name">stop</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">subscriptions</i> <span class="icon-name">subscriptions</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">subtitles</i> <span class="icon-name">subtitles</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">surround_sound</i> <span class="icon-name">surround_sound</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">video_call</i> <span class="icon-name">video_call</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">video_label</i> <span class="icon-name">video_label</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">video_library</i> <span class="icon-name">video_library</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">videocam</i> <span class="icon-name">videocam</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">videocam_off</i> <span class="icon-name">videocam_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">volume_down</i> <span class="icon-name">volume_down</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">volume_mute</i> <span class="icon-name">volume_mute</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">volume_off</i> <span class="icon-name">volume_off</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">volume_up</i> <span class="icon-name">volume_up</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">web</i> <span class="icon-name">web</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">web_asset</i> <span class="icon-name">web_asset</span> </div>
										</div>

										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">business</i> <span class="icon-name">business</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call</i> <span class="icon-name">call</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_end</i> <span class="icon-name">call_end</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_made</i> <span class="icon-name">call_made</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_merge</i> <span class="icon-name">call_merge</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_missed</i> <span class="icon-name">call_missed</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_missed_outgoing</i> <span class="icon-name">call_missed_outgoing</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_received</i> <span class="icon-name">call_received</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">call_split</i> <span class="icon-name">call_split</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">chat</i> <span class="icon-name">chat</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">chat_bubble</i> <span class="icon-name">chat_bubble</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">chat_bubble_outline</i> <span class="icon-name">chat_bubble_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">clear_all</i> <span class="icon-name">clear_all</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">comment</i> <span class="icon-name">comment</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">contact_mail</i> <span class="icon-name">contact_mail</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">contact_phone</i> <span class="icon-name">contact_phone</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">contacts</i> <span class="icon-name">contacts</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">dialer_sip</i> <span class="icon-name">dialer_sip</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">dialpad</i> <span class="icon-name">dialpad</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">email</i> <span class="icon-name">email</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">forum</i> <span class="icon-name">forum</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">import_contacts</i> <span class="icon-name">import_contacts</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">import_export</i> <span class="icon-name">import_export</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">invert_colors_off</i> <span class="icon-name">invert_colors_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">live_help</i> <span class="icon-name">live_help</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">location_off</i> <span class="icon-name">location_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">location_on</i> <span class="icon-name">location_on</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">mail_outline</i> <span class="icon-name">mail_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">message</i> <span class="icon-name">message</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">no_sim</i> <span class="icon-name">no_sim</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">phone</i> <span class="icon-name">phone</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">phonelink_erase</i> <span class="icon-name">phonelink_erase</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">phonelink_lock</i> <span class="icon-name">phonelink_lock</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">phonelink_ring</i> <span class="icon-name">phonelink_ring</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">phonelink_setup</i> <span class="icon-name">phonelink_setup</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">portable_wifi_off</i> <span class="icon-name">portable_wifi_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">present_to_all</i> <span class="icon-name">present_to_all</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">ring_volume</i> <span class="icon-name">ring_volume</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">rss_feed</i> <span class="icon-name">rss_feed</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">screen_share</i> <span class="icon-name">screen_share</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">speaker_phone</i> <span class="icon-name">speaker_phone</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">stay_current_landscape</i> <span class="icon-name">stay_current_landscape</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">stay_current_portrait</i> <span class="icon-name">stay_current_portrait</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">stay_primary_landscape</i> <span class="icon-name">stay_primary_landscape</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">stay_primary_portrait</i> <span class="icon-name">stay_primary_portrait</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">stop_screen_share</i> <span class="icon-name">stop_screen_share</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">swap_calls</i> <span class="icon-name">swap_calls</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">textsms</i> <span class="icon-name">textsms</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">voicemail</i> <span class="icon-name">voicemail</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">vpn_key</i> <span class="icon-name">vpn_key</span> </div>
										</div>

										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add</i> <span class="icon-name">add</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add_box</i> <span class="icon-name">add_box</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add_circle</i> <span class="icon-name">add_circle</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add_circle_outline</i> <span class="icon-name">add_circle_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">archive</i> <span class="icon-name">archive</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">backspace</i> <span class="icon-name">backspace</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">block</i> <span class="icon-name">block</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">clear</i> <span class="icon-name">clear</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">content_copy</i> <span class="icon-name">content_copy</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">content_cut</i> <span class="icon-name">content_cut</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">content_paste</i> <span class="icon-name">content_paste</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">create</i> <span class="icon-name">create</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">delete_sweep</i> <span class="icon-name">delete_sweep</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">drafts</i> <span class="icon-name">drafts</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">filter_list</i> <span class="icon-name">filter_list</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">flag</i> <span class="icon-name">flag</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">font_download</i> <span class="icon-name">font_download</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">forward</i> <span class="icon-name">forward</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">gesture</i> <span class="icon-name">gesture</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">inbox</i> <span class="icon-name">inbox</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">link</i> <span class="icon-name">link</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">low_priority</i> <span class="icon-name">low_priority</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">mail</i> <span class="icon-name">mail</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">markunread</i> <span class="icon-name">markunread</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">move_to_inbox</i> <span class="icon-name">move_to_inbox</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">next_week</i> <span class="icon-name">next_week</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">redo</i> <span class="icon-name">redo</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">remove</i> <span class="icon-name">remove</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">remove_circle</i> <span class="icon-name">remove_circle</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">remove_circle_outline</i> <span class="icon-name">remove_circle_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">reply</i> <span class="icon-name">reply</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">reply_all</i> <span class="icon-name">reply_all</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">report</i> <span class="icon-name">report</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">save</i> <span class="icon-name">save</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">select_all</i> <span class="icon-name">select_all</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">send</i> <span class="icon-name">send</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sort</i> <span class="icon-name">sort</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">text_format</i> <span class="icon-name">text_format</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">unarchive</i> <span class="icon-name">unarchive</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">undo</i> <span class="icon-name">undo</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">weekend</i> <span class="icon-name">weekend</span> </div>
										</div>

										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">access_alarm</i> <span class="icon-name">access_alarm</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">access_alarms</i> <span class="icon-name">access_alarms</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">access_time</i> <span class="icon-name">access_time</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">add_alarm</i> <span class="icon-name">add_alarm</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">airplanemode_active</i> <span class="icon-name">airplanemode_active</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">airplanemode_inactive</i> <span class="icon-name">airplanemode_inactive</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">battery_alert</i> <span class="icon-name">battery_alert</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">battery_charging_full</i> <span class="icon-name">battery_charging_full</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">battery_full</i> <span class="icon-name">battery_full</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">battery_std</i> <span class="icon-name">battery_std</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">battery_unknown</i> <span class="icon-name">battery_unknown</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">bluetooth</i> <span class="icon-name">bluetooth</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">bluetooth_connected</i> <span class="icon-name">bluetooth_connected</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">bluetooth_disabled</i> <span class="icon-name">bluetooth_disabled</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">bluetooth_searching</i> <span class="icon-name">bluetooth_searching</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">brightness_auto</i> <span class="icon-name">brightness_auto</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">brightness_high</i> <span class="icon-name">brightness_high</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">brightness_low</i> <span class="icon-name">brightness_low</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">brightness_medium</i> <span class="icon-name">brightness_medium</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">data_usage</i> <span class="icon-name">data_usage</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">developer_mode</i> <span class="icon-name">developer_mode</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">devices</i> <span class="icon-name">devices</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">dvr</i> <span class="icon-name">dvr</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">gps_fixed</i> <span class="icon-name">gps_fixed</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">gps_not_fixed</i> <span class="icon-name">gps_not_fixed</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">gps_off</i> <span class="icon-name">gps_off</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">graphic_eq</i> <span class="icon-name">graphic_eq</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">location_disabled</i> <span class="icon-name">location_disabled</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">location_searching</i> <span class="icon-name">location_searching</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">network_cell</i> <span class="icon-name">network_cell</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">network_wifi</i> <span class="icon-name">network_wifi</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">nfc</i> <span class="icon-name">nfc</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">screen_lock_landscape</i> <span class="icon-name">screen_lock_landscape</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">screen_lock_portrait</i> <span class="icon-name">screen_lock_portrait</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">screen_lock_rotation</i> <span class="icon-name">screen_lock_rotation</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">screen_rotation</i> <span class="icon-name">screen_rotation</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sd_storage</i> <span class="icon-name">sd_storage</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">settings_system_daydream</i> <span class="icon-name">settings_system_daydream</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_cellular_4_bar</i> <span class="icon-name">signal_cellular_4_bar</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_cellular_connected_no_internet_4_bar</i> <span class="icon-name">signal_cellular_connected_no_internet_4_bar</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_cellular_no_sim</i> <span class="icon-name">signal_cellular_no_sim</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_cellular_null</i> <span class="icon-name">signal_cellular_null</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_cellular_off</i> <span class="icon-name">signal_cellular_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_wifi_4_bar</i> <span class="icon-name">signal_wifi_4_bar</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_wifi_4_bar_lock</i> <span class="icon-name">signal_wifi_4_bar_lock</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">signal_wifi_off</i> <span class="icon-name">signal_wifi_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">storage</i> <span class="icon-name">storage</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">usb</i> <span class="icon-name">usb</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">wallpaper</i> <span class="icon-name">wallpaper</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">widgets</i> <span class="icon-name">widgets</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">wifi_lock</i> <span class="icon-name">wifi_lock</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">wifi_tethering</i> <span class="icon-name">wifi_tethering</span></div>
										</div>

										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">cake</i> <span class="icon-name">cake</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">domain</i> <span class="icon-name">domain</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">group</i> <span class="icon-name">group</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">group_add</i> <span class="icon-name">group_add</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">location_city</i> <span class="icon-name">location_city</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">mood</i> <span class="icon-name">mood</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">mood_bad</i> <span class="icon-name">mood_bad</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">notifications</i> <span class="icon-name">notifications</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">notifications_active</i> <span class="icon-name">notifications_active</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">notifications_none</i> <span class="icon-name">notifications_none</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">notifications_off</i> <span class="icon-name">notifications_off</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">notifications_paused</i> <span class="icon-name">notifications_paused</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">pages</i> <span class="icon-name">pages</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">party_mode</i> <span class="icon-name">party_mode</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">people</i> <span class="icon-name">people</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">people_outline</i> <span class="icon-name">people_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">person</i> <span class="icon-name">person</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">person_add</i> <span class="icon-name">person_add</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">person_outline</i> <span class="icon-name">person_outline</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">plus_one</i> <span class="icon-name">plus_one</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">poll</i> <span class="icon-name">poll</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">public</i> <span class="icon-name">public</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">school</i> <span class="icon-name">school</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sentiment_dissatisfied</i> <span class="icon-name">sentiment_dissatisfied</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sentiment_neutral</i> <span class="icon-name">sentiment_neutral</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sentiment_satisfied</i> <span class="icon-name">sentiment_satisfied</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sentiment_very_dissatisfied</i> <span class="icon-name">sentiment_very_dissatisfied</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">sentiment_very_satisfied</i> <span class="icon-name">sentiment_very_satisfied</span></div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">share</i> <span class="icon-name">share</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">whatshot</i> <span class="icon-name">whatshot</span> </div>
										</div>

										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">check_box</i> <span class="icon-name">check_box</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">check_box_outline_blank</i> <span class="icon-name">check_box_outline_blank</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">indeterminate_check_box</i> <span class="icon-name">indeterminate_check_box</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">radio_button_checked</i> <span class="icon-name">radio_button_checked</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">radio_button_unchecked</i> <span class="icon-name">radio_button_unchecked</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">star</i> <span class="icon-name">star</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">star_border</i> <span class="icon-name">star_border</span> </div>
										</div>
										<div class="col-sm-9 col-md-4 col-lg-3 col-xl-6">
										    <div class="demo-google-material-icon"> <i class="material-icons">star_half</i> <span class="icon-name">star_half</span> </div>
										</div>
			                        </div>
			                    </div>
			                </div>
                            <div class="row clearfix">
                                <div class="col-sm-8 ">
                                    <button type="button" class="btn btn-raised btn-warning btn-round waves-effect">Batal</button>
                                    <button type="button" class="btn btn-raised btn-primary btn-round waves-effect">Simpan</button>
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
                    	<form class="form-horizontal">
	                    	<div class="row clearfix">
		                        <div class="col-lg-12 col-md-12 col-sm-8 dd">
		                            <ol class="dd-list">
		                                <li class="dd-item" data-id="1">
		                                    <div class="dd-handle">Dashboard</div>
		                                </li>
		                                <li class="dd-item" data-id="2">
		                                    <div class="dd-handle">Master</div>
		                                    <ol class="dd-list">
		                                        <li class="dd-item" data-id="3">
		                                            <div class="dd-handle">Menu</div>
		                                        </li>
		                                        <li class="dd-item" data-id="3">
		                                            <div class="dd-handle">Akses Menu</div>
		                                        </li>
		                                        <li class="dd-item" data-id="3">
		                                            <div class="dd-handle">Jenis Vendor</div>
		                                        </li>
		                                        <li class="dd-item" data-id="4">
		                                            <div class="dd-handle">Faq</div>
		                                        </li>
		                                    </ol>
		                                </li>
		                                <li class="dd-item" data-id="11">
		                                    <div class="dd-handle">e-commers</div>
		                                    <ol class="dd-list">
		                                        <li class="dd-item" data-id="5">
		                                            <div class="dd-handle">Toko</div>
		                                            <ol class="dd-list">
		                                                <li class="dd-item" data-id="6">
		                                                    <div class="dd-handle">Informasi Toko</div>
		                                                </li>
		                                                <li class="dd-item" data-id="7">
		                                                    <div class="dd-handle">Geleri</div>
		                                                </li>
		                                                <li class="dd-item" data-id="8">
		                                                    <div class="dd-handle">Testimonial</div>
		                                                </li>
		                                            </ol>
		                                        </li>
		                                        <li class="dd-item" data-id="9">
		                                            <div class="dd-handle">Klinik Dokter</div>
		                                        </li>
		                                        
		                                        <li class="dd-item" data-id="10">
		                                            <div class="dd-handle">Groomers</div>
		                                        </li>
		                                        <li class="dd-item" data-id="11">
		                                            <div class="dd-handle">Ekspeditor</div>
		                                        </li>
		                                    </ol>
		                                </li>
		                                <li class="dd-item" data-id="12">
		                                    <div class="dd-handle">Adoption</div>
		                                </li>
		                            </ol>
		                        </div>
	                    	</div>
	                        <div class="row clearfix">
	                                <div class="col-sm-8 ">
	                                    <button type="button" class="btn btn-raised btn-warning btn-round waves-effect">Batal</button>
	                                    <button type="button" class="btn btn-raised btn-primary btn-round waves-effect">Simpan</button>
	                                </div>
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
<script src="{{ asset('backend/assets/plugins/nestable/jquery.nestable.js')}}"></script> <!-- Jquery Nestable -->
<script src="{{ asset('backend/assets/js/pages/ui/sortable-nestable.js')}}"></script> 
@endpush