@extends('client.master')
@section('content')
<div id="app">
    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area" data-background="img/bg/page-title.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Register</h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- login Area Strat-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Signup From Here</h3>
                        <label>Full Name <span>**</span></label>
                        <input v-model="add.full_name" type="text" placeholder="Nhập vào họ và tên của bạn" />
                        <label>Email Address <span>**</span></label>
                        <input v-model="add.email" type="email" placeholder="Nhập vào địa chỉ email" />
                        <label>Phone Number <span>**</span></label>
                        <input v-model="add.phone_number" type="tel" placeholder="Nhập vào số điện thoại" />
                        <label>Password <span>**</span></label>
                        <input v-model="add.password" type="password" placeholder="Nhập vào mật khẩu" />
                        <label>Re-Password <span>**</span></label>
                        <input v-model="add.re_password" type="password" placeholder="Nhập lại mật khẩu" />
                        <div class="mt-10"></div>
                        <button class="btn theme-btn-2 w-100" v-on:click="create()">Register Now</button>
                        <div class="or-divide"><span>or</span></div>
                        <a href="/login" class="btn theme-btn w-100">Login Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</div>
@endsection
@section('js')
<script>
    new Vue({
        el      :   '#app',
        created()   {

        },
        data    :   {
            add :   {},
        },
        methods :   {
            create() {
                axios
                    .post('/register', this.add)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                        } else if(res.data.status == 0) {
                            toastr.error(res.data.mess);
                        } else if(res.data.status == 2) {
                            toastr.warning(res.data.mess);
                        }
                    })
                    .catch((res) => {
                        var listE = res.response.data.errors;
                        $.each(listE, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            }
        },
    });
</script>
@endsection
