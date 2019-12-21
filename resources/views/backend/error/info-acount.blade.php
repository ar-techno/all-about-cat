@extends('layouts.login_backend')
@section('content')
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url({{ asset('backend/assets/images/login.jpg')}})"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="">
                    <div class="header">
                        <div class="logo-container">
                            <img src="{{ asset('backend/assets/images/logo.svg')}}" alt="">
                        </div>
                        <h5>Welcome Back To Morow</h5>
                        <span>Akun Anda Sedang Dalam Proses Verifikasi</span>
                    </div>
                    <div class="content">
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="logout" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">Go To Logout</a>
                        <h5><a href="javascript:void(0);" class="link">Need Help?</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li><a href="contact-us.html" target="_blank">Contact Us</a></li>
                    <li><a href="aboutus.html" target="_blank">About Us</a></li>
                    <li><a href="javascript:void(0);">FAQ</a></li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Designed by <a href="aboutus.html" target="_blank">AAC</a></span>
            </div>
        </div>
    </footer>
</div>
@endsection
