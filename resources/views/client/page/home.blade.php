@extends('client.master')
@section('content')
<div id="app">
     <!-- slider-area start -->
     @include('client.component.slide')
     <!-- slider-area end -->

     <!-- banner area start -->
     @include('client.component.banner')
     <!-- banner area end -->

     <!-- product-area start -->
     @include('client.component.product_area')
     <!-- product-area end -->

     <!-- top-seller-area start -->
     @include('client.component.top_seller')
     <!-- top-seller-area end -->

     <!-- latest-blog-area start -->
     {{-- @include('client.component.blog_new_feed') --}}
     <!-- latest-blog-area end -->

     <!-- subscribe-area start -->
     @include('client.component.subscribe')
     <!-- subscribe-area end -->
</div>
@endsection
@section('js')
<script>
new Vue({
        el      :   '#app',
        data    :   {
            user :   {},
        },
        methods :   {
            login() {
                axios
                    .post('/login', this.user)
                    .then((res) => {
                        console.log(res.data.status)
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                            location.reload();
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
            },
            addToCart(id_san_pham) {
                var xxx = {
                    'id_san_pham' : id_san_pham
                }
                axios
                    .post('/add-to-cart', xxx)
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
            },
        },
    });
</script>
@endsection
