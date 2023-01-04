@extends('client.master')
@section('content')
<section class="breadcrumb-area" data-background="img/bg/page-title.png" style="background-image: url(&quot;img/bg/page-title.png&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Shoping Cart</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html">home</a></li>
                        <li><span>Cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cart-area pt-100 pb-100">
    <div class="container" id="app">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(v, k) in list">
                                    <td class="product-thumbnail"><a href="#"><img v-bind:src="v.hinh_anh" alt=""></a></td>
                                    <td class="product-name"><a href="#">@{{ v.ten_san_pham }}</a></td>
                                    <td class="product-price"><span class="amount">@{{ format(v.don_gia) }}</span></td>
                                    <td class="product-name text-center">
                                        <div class="input-group text-center">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" v-on:click="update(v, -1)">-</span>
                                            </div>
                                            <input type="text" style="width: 40px" v-model="v.so_luong" v-on:change="update(v, 0)">
                                            <div class="input-group-append">
                                                <span class="input-group-text" v-on:click="update(v, 1)">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">@{{ format(v.thanh_tien) }}</span></td>
                                    <td class="product-remove"><a v-on:click="remove(v)"><i class="fa fa-times"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="table-content table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th class="text-left" style="padding-left: 10px">Địa Chỉ Nhận Hàng</th>
                                            <td>
                                                <input v-model="bill.dia_chi_nhan" type="text" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-left" style="padding-left: 10px">Tên Người Nhận Hàng</th>
                                            <td>
                                                <input v-model="bill.ten_nguoi_nhan" type="text" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-left" style="padding-left: 10px">Số Điện Thoại Nhận Hàng</th>
                                            <td>
                                                <input v-model="bill.so_dien_thoai_nhan" type="text" class="form-control">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul class="mb-25">
                                    <li>Tổng Tiền <span>@{{ format(total) }}</span></li>
                                </ul>
                                <button v-on:click="createBill()" class="btn theme-btn">Proceed to checkout</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    new Vue({
        el      :   '#app',
        data    :   {
            list    :   [],
            total   :   0,
            bill    :   {},
        },
        created()   {
            this.loadData();
        },
        methods :   {
            loadData()  {
                axios
                    .get('/cart/data')
                    .then((res) => {
                        this.list = res.data.data;
                        this.total = res.data.tongTien;
                    });
            },
            format(x) {
                return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(x)
            },
            update(value, type) {
                value.so_luong = value.so_luong + type;
                axios
                    .post('/cart/update', value)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                            this.loadData();
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
            createBill() {
                axios
                    .post('/create-bill', this.bill)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                            this.loadData();
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
            remove(payload) {
                axios
                    .post('/cart/delete', payload)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.mess);
                            this.loadData();
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
