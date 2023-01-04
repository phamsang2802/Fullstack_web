@extends('client.master')
@section('content')
<section class="breadcrumb-area" data-background="img/bg/page-title.png" style="background-image: url(&quot;img/bg/page-title.png&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Login</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html">home</a></li>
                        <li><span>Login</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="login-area pt-100 pb-100">
    <div class="container" id="app">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                <form action="/login" method="post">
                    @csrf
                    <h3 class="text-center mb-60">Login From Here</h3>
                    <label>Email Address <span>**</span></label>
                    <input name="email" type="text" placeholder="Enter Email address...">
                    <label>Password <span>**</span></label>
                    <input name="password" type="password" placeholder="Enter password...">
                    <div class="login-action mb-20 fix">
                        <span class="log-rem f-left">
                            <input id="remember" type="checkbox">
                            <label for="remember">Remember me!</label>
                        </span>
                        <span class="forgot-login f-right">
                            <a href="#">Lost your password?</a>
                        </span>
                    </div>
                    {{-- {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!} --}}
                    <button type="submit" class="btn theme-btn-2 w-100">Login Now</button>
                    <div class="or-divide"><span>or</span></div>
                    <a href="/register" class="btn theme-btn w-100">Register Now</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
@endsection
