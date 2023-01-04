@extends('client.master')
@section('content')
<section class="breadcrumb-area" data-background="img/bg/page-title.png" style="background-image: url(&quot;img/bg/page-title.png&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Đổi Mật Khẩu Mới</h1>
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
                <form action="/change-password" method="post">
                    @csrf
                    <h3 class="text-center mb-60">Khôi Phục Mật Khẩu</h3>
                    <label>Mật Khẩu Mới <span>**</span></label>
                    <input name="password" type="text" placeholder="Mật khẩu mới">
                    <label>Nhật Lại Mật Khẩu<span>**</span></label>
                    <input name="re_password" type="text" placeholder="Nhập lại mật khẩu">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <button type="submit" class="btn theme-btn-2 w-100 mt-3">Xác Nhận Đổi Mật Khẩu</button>
                    <div class="or-divide"><span>or</span></div>
                    <a href="/login" class="btn theme-btn w-100">Đăng Nhập</a>
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
