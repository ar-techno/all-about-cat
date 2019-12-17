@extends('layouts.backend.app')
@section('title', 'Dashboard')
@section('header','Dashboard')
@section('subheader','Selamat Datang Di AAC')
@section('bread') <a href="">Dashboard</a> @endsection

@push('style')

@endpush
@push('scripthead')
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/morrisjs/morris.min.css')}}" />
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <ul class="row profile_state list-unstyled">
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-eye col-amber"></i>
                                        <h4>15,453</h4>
                                        <span>Post View</span>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-thumb-up col-blue"></i>
                                        <h4>921</h4>
                                        <span>Likes</span>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-comment-text col-red"></i>
                                        <h4>215</h4>
                                        <span>Comments</span>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-account text-success"></i>
                                        <h4>22,055</h4>
                                        <span>Profile Views</span>
                                    </div>
                                </li>                      
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row clearfix social-widget">
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect facebook-widget">
                            <div class="icon"><i class="zmdi zmdi-facebook"></i></div>
                            <div class="content">
                                <div class="text">Like</div>
                                <div class="number">123</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect instagram-widget">
                            <div class="icon"><i class="zmdi zmdi-instagram"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">231</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect twitter-widget">
                            <div class="icon"><i class="zmdi zmdi-twitter"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">31</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card tasks_report">
                    <div class="header">
                        <h2><strong>Total</strong> Revenue</h2>                        
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body text-center">
                        <h4 class="margin-0">Total Sale</h4>
                        <h6 class="m-b-20">2,45,124</h6>
                        <h6 class="m-t-20">Satisfaction Rate</h6>
                        <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="35px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#212121">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Visitors</strong> Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body">
                        <div id="world-map-markers" style="height: 245px;" class="m-b-10"></div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="progress-container">
                                    <span class="progress-badge">visitor from america</span>
                                    <div class="progress">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from Canada</span>
                                    <div class="progress">
                                        <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from Germany</span>
                                    <div class="progress">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="progress-container">
                                    <span class="progress-badge">visitor from UK</span>
                                    <div class="progress">
                                        <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from India</span>
                                    <div class="progress">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from Australia</span>
                                    <div class="progress">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row clearfix">
                <div class=" col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Vendor</strong> Profiles <small>Vendor Preformance / Monthly Status</small> </h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive members_profiles">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:60px;">Member</th>
                                        <th>Name</th>
                                        <th>Earnings</th>
                                        <th>Sales</th>                                    
                                        <th>Reviews</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="{{ asset('backend/assets/images/xs/avatar1.jpg')}}" alt="user" width="40"> </td>
                                        <td>
                                            <a href="javascript:void(0);">Logan</a>
                                        </td>
                                        <td>$420</td>
                                        <td>23</td>                                   
                                        <td>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </td>
                                            <td>
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="{{ asset('backend/assets/images/xs/avatar2.jpg')}}" alt="user" width="40"> </td>
                                        <td>
                                            <a href="javascript:void(0);">Isabella</a>
                                        </td>
                                        <td>$350</td>
                                        <td>16</td>                                   
                                        <td>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </td>
                                            <td>
                                            <div class="progress">
                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="{{ asset('backend/assets/images/xs/avatar3.jpg')}}" alt="user" width="40"> </td>
                                        <td>
                                            <a href="javascript:void(0);">Jackson</a>
                                        </td>
                                        <td>$201</td>
                                        <td>11</td>                                   
                                        <td>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </td>
                                            <td>
                                            <div class="progress">
                                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="{{ asset('backend/assets/images/xs/avatar4.jpg')}}" alt="user" width="40"> </td>
                                        <td>
                                            <a href="javascript:void(0);">Victoria</a>
                                        </td>
                                        <td>$651</td>
                                        <td>28</td>                                   
                                        <td>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                        </td>
                                            <td>
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded-circle" src="{{ asset('backend/assets/images/xs/avatar5.jpg')}}" alt="user" width="40"> </td>
                                        <td>
                                            <a href="javascript:void(0);">Lucas</a>
                                        </td>
                                        <td>$300</td>
                                        <td>20</td>                                   
                                        <td>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </td>
                                            <td>
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Browser</strong> Usage</h2>
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="donut_chart" class="dashboard-donut-chart"></div>
                        <table class="table m-t-25 m-b-0">
                            <tbody>
                                <tr>                                   
                                    <td>Chrome</td>
                                    <td>6985</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td>2697</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Safari</td>
                                    <td>3597</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>Firefox</td>
                                    <td>2145</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Opera</td>
                                    <td>1854</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>IE</td>
                                    <td>154</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card weather">
                         <div class="header">
                            <h2><strong>Weather</strong></h2>
                        </div>
                        <div class="body">
                            <div class="city">
                                <span>sky is clear</span>
                                <h3>New York</h3>
                                <img src="assets/images/weather/summer.svg" alt="">
                            </div>
                            <ul class="row days list-unstyled m-b-0">
                                <li>
                                    <h5>SUN</h5>
                                    <img src="assets/images/weather/sky.svg" alt="">
                                    <span class="degrees">77</span>
                                </li>
                                <li>
                                    <h5>MON</h5>
                                    <img src="assets/images/weather/rain.svg" alt="">
                                    <span class="degrees">81</span>
                                </li>
                                <li>
                                    <h5>TUE</h5>
                                    <img src="assets/images/weather/summer.svg" alt="">
                                    <span class="degrees">82</span>
                                </li>
                                <li>
                                    <h5>WED</h5>
                                    <img src="assets/images/weather/summer.svg" alt="">
                                    <span class="degrees">82</span>
                                </li>
                                <li>
                                    <h5>THU</h5>
                                    <img src="assets/images/weather/cloudy.svg" alt="">
                                    <span class="degrees">81</span>
                                </li>
                                <li>
                                    <h5>FRI</h5>
                                    <img src="assets/images/weather/summer.svg" alt="">
                                    <span class="degrees">67</span>
                                </li>
                                <li>
                                    <h5>SAT</h5>
                                    <img src="assets/images/weather/cloudy.svg" alt="">
                                    <span class="degrees">81</span>
                                </li>
                            </ul>                       
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
@endsection
@push('scriptbottom')
<script src="{{ asset('backend/assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{ asset('backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('backend/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob, Count To, Sparkline Js -->


@endpush