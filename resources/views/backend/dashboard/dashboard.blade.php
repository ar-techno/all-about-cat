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
    </div>
@endsection
@push('scriptbottom')
<script src="{{ asset('backend/assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{ asset('backend/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob, Count To, Sparkline Js -->
<script src="{{ asset('backend/assets/js/pages/index.js')}}"></script>
<script type="text/javascript">
    var browser = (function(){
  var test = function(regexp) { return regexp.test(window.navigator.userAgent);}
  switch(true){
    case test(/edge/i): return "edge";
    case test(/opr/i) && (!!window.opr || !!window.opera): return "opera";
    case test(/chrome/i) && !!window.chrome: return "chrome";
    case test(/trident/i) : return "ie";
    case test(/firefox/i) : return "firefox";
    case test(/safari/i): return "safari";
    default: return "other";
  }
})();
console.log(browser)
    
</script>
@endpush