<div id="header-sticky" class="header-area box-90">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-6 col-md-6 col-7 col-sm-5 d-flex align-items-center pos-relative">
                <div class="basic-bar cat-toggle">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </div>
                <div class="logo">
                    <a href="/"><img src="/assets_client/img/logo/logo.png" alt=""></a>
                </div>

                <div class="category-menu">
                    <h4>Category</h4>
                    <ul>
                        <li><a href="shop.html"><i class="flaticon-shopping-cart-1"></i> Table lamp</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-8 col-8 d-none d-xl-block">
                <div class="main-menu text-center">
                    <nav id="mobile-menu">
                        <ul>
                            <li>
                                <a href="/">Home </a>
                            </li>
                            <li class="mega-menu">
                                <a href="shop.html">Shop</a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="#">Category View</a>
                                        <ul class="submenu  level-1">
                                            <li>
                                                <a href="shop.html">Shop 2 Column</a>
                                            </li>
                                        </ul>
                                    </li>
                                    </ul>
                            </li>
                            <li>
                                <a href="/product-detail">Products</a>
                            </li>
                            <li>
                                <a href="/category">Category</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-5 col-sm-7 pl-0">
                <div class="header-right f-right">
                    <ul>
                        <li class="search-btn">
                            <a class="search-btn nav-search search-trigger" href="#"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="login-btn"><a href="/login"><i class="far fa-user"></i></a></li>
                        @if(Auth::guard('client')->check())
                        <li class="d-shop-cart"><a href="/cart"><i class="flaticon-shopping-cart"></i> <span class="cart-count">@{{ list_t.length  }}</span></a>
                            <ul class="minicart">
                                <li v-for="(v, k) in list_t">
                                    <div class="cart-img">
                                        <a href="product-details.html">
                                            <img v-bind:src="v.hinh_anh" alt="" />
                                        </a>
                                    </div>
                                    <div class="cart-content">
                                        <h3>
                                            <a href="product-details.html">@{{ v.ten_san_pham }}</a>
                                        </h3>
                                        <div class="cart-price">
                                            <span class="new">@{{ format(v.don_gia) }}</span>
                                            <span>
                                                <del>@{{ format(v.gia_ban) }}</del>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="del-icon">
                                        <a v-on:click="remove(v)">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="total-price">
                                        <span class="f-left">Total:</span>
                                        <span class="f-right">@{{ format(total_t) }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkout-link">
                                        <a href="/cart">Shopping Cart</a>
                                        <a class="red-color" href="/cart">Checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="search-btn">
                            <a class="search-btn nav-search" href="/logout"><i class="fas fa-search"></i></a>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
            <div class="col-12 d-xl-none">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</div>
<script>
    new Vue({
        el      :   "#header-sticky",
        data    :   {
            list_t    :   [],
            total_t   :   10,
        },
        created() {
            this.loadData();
        },
        methods : {
            loadData()  {
                axios
                    .get('/cart/data')
                    .then((res) => {
                        this.list_t = res.data.data;
                        this.total_t = res.data.tongTien;
                    });
            },
            format(x) {
                return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(x)
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
