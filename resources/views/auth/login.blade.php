@extends('layouts.login_backend')
@section('content')
<div class="page-header">
    <div class="page-header-image" style="background-image:url({{ asset('backend/assets/images/login.jpg')}})"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="header">
                        <div class="logo-container">
                            <img src="{{ asset('backend/assets/images/logo.svg')}}" alt="">
                        </div>
                        <h5>{{ __('Login') }}</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="input-group input-lg">
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="footer text-center">
                         <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                             <h5><a class="link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a></h5>
                        @endif
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
