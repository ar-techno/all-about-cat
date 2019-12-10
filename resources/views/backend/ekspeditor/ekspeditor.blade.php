@extends('layouts.backend.app')
@section('title', 'AAC')
@section('header','Profile')
@section('subheader','Welcome to AAC')
@section('bread') <a href="">Profile</a> @endsection

@push('style')
<link rel="stylesheet" href="{{asset('backend/assets/css/timeline.css')}}">
@endpush
@push('scripthead')
@endpush
@section('content')
	    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row" align="center">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right" > <img src="{{asset('backend/assets/images/profile_av.jpg')}}" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                                <p>795 Folsom Ave, Suite 600<br> San Francisco, CADGE 94107</p>
                              
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Phone" href="javascript:void(0);"><i class="zmdi zmdi-account-box-phone"></i></a>
                                    <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                                </p>
                            </div>                
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-account text-success"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                <small>Profile Views</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-thumb-up col-blue"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                <small>Likes</small>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-comment-text col-red"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                <small>Comments</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#taqs">Taqs</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <small class="text-muted">Email address: </small>
                            <p>michael@gmail.com</p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p>+ 202-555-9191</p>
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>+ 202-555-2828</p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0">October 22th, 1990</p>
                        </div>
                        <div class="tab-pane body" id="taqs">
                            <ul class="new_friend_list list-unstyled row">
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="">
                                        <img src="{{asset('backend/assets/images/sm/avatar1.jpg')}}" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Jackson</h6>
                                        <small class="join_date">Today</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="">
                                        <img src="{{asset('backend/assets/images/sm/avatar2.jpg')}}" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Aubrey</h6>
                                        <small class="join_date">Yesterday</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="">
                                        <img src="{{asset('backend/assets/images/sm/avatar3.jpg')}}" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Oliver</h6>
                                        <small class="join_date">08 Nov</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="">
                                        <img src="{{asset('backend/assets/images/sm/avatar4.jpg')}}" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Isabella</h6>
                                        <small class="join_date">12 Dec</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="">
                                        <img src="{{asset('backend/assets/images/sm/avatar1.jpg')}}" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Jacob</h6>
                                        <small class="join_date">12 Dec</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="">
                                        <img src="{{asset('backend/assets/images/sm/avatar5.jpg')}}" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Matthew</h6>
                                        <small class="join_date">17 Dec</small>
                                    </a>
                                </li>                            
                            </ul>
                        </div>                        
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Histori</strong> Kerjasama</h2>
                        <ul class="header-dropdown">                            
                        	<li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="right_chat list-unstyled">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar4.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span class="name">Kucingku Cantik</span>
                                            <span class="message">Jl. Purnama</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar5.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span class="name">Salon Kucing Ceria</span>
                                            <span class="message">Jl. Paus ujung, No.202</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="assets/images/xs/avatar5.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span class="name">Toko Peralatan Kucing</span>
                                            <span class="message">Jl. Paus Tanjung, No.10</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>                      
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Setting</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="timeline">
                        <div class="card">
                            <div class="body">
                                <ul class="cbp_tmtimeline">
                                    <li>
                                        <time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">25/12/2017</span> <span class="large">Now</span></time>
                                        <div class="cbp_tmicon"><i class="zmdi zmdi-account"></i></div>
                                        <div class="cbp_tmlabel empty"> <span>No Activity</span> </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="2017-11-04T03:45"><span>03:45 AM</span> <span>Today</span></time>
                                        <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);">Art Ramadani</a> <span>posted a status update</span></h2>
                                            <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Two weeks ago</span></time>
                                        <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">New York</a></h2>
                                            <blockquote>
                                                <p class="blockquote blockquote-primary">
                                                    "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."                                    
                                                    <br>
                                                    <small>
                                                        - Isabella
                                                    </small>
                                                </p>
                                            </blockquote>
                                            <div class="row clearfix">
                                                <div class="col-lg-12">
                                                    <div class="map m-t-10">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477011208!2d-74.11976308802028!3d40.69740344230033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1508039335245" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                            </div>							
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                                <button class="btn btn-info btn-round">Save Changes</button>                               
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Settings</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scriptbottom')
<script src="{{asset('backend/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->
<script src="{{asset('backend/assets/js/pages/charts/jquery-knob.js')}}"></script>
</script>

@endpush