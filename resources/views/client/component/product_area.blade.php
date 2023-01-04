<section class="product-area box-90 pt-70 pb-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-12">
                <div class="area-title mb-50">
                    <h2>Brand New Products</h2>
                    <p>Browse the huge variety of our products</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="product-tab mb-40">
                    <ul class="nav product-nav  justify-content-xl-end" id="myTab1" role="tablist">
                        @foreach ($loaiSP as $key => $value)
                            <li class="nav-item">
                                <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="home-tab" data-toggle="tab" href="#home_{{$key}}" role="tab" aria-controls="home"
                                    aria-selected="true" style="font-family: 'Inter', sans-serif;">{{$value->ten_loai_san_pham}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="product-tab-content">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($loaiSP as $key => $value)
                            {{-- $value->id = 1 Điện Thoại
                            $value->id = 2 LapTop
                            $value->id = 3 Tai Nghe
                            ... --}}
                            <div class="tab-pane fade {{$key == 0 ? 'show active' : ''}}" id="home_{{$key}}" role="tabpanel" aria-labelledby="home-tab">
                                <div class="product-slider owl-carousel">
                                    @foreach ($sanPham as $key_sp => $value_sp)
                                        @if($value_sp->id_cha == $value->id)
                                        <div class="pro-item">
                                            <div class="product-wrapper mb-50">
                                                <div class="product-img mb-25">
                                                    <a href="/san-pham/{{$value_sp->slug_san_pham}}-post{{$value_sp->id}}">
                                                        <img src="{{ $value_sp->hinh_anh }}" alt="">
                                                        <img class="secondary-img" src="{{ $value_sp->hinh_anh }}" alt="">
                                                    </a>
                                                    <div class="product-action text-center">
                                                        @if(Auth::guard('client')->check())
                                                            <a title="Shoppingb Cart" v-on:click="addToCart({{$value_sp->id}})">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                        @else
                                                            <a title="Shoppingb Cart" data-toggle="modal" data-target="#loginModal">
                                                                <i class="flaticon-shopping-cart"></i>
                                                            </a>
                                                        @endif
                                                        <a href="#" title="Quick View">
                                                            <i class="flaticon-eye"></i>
                                                        </a>
                                                        <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                            <i class="flaticon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-cat mb-10">
                                                        <a href="shop.html">decor, </a>
                                                        <a href="shop.html">furniture</a>
                                                    </div>
                                                    <h4>
                                                        <a href="/san-pham/{{$value_sp->slug_san_pham}}-post{{$value_sp->id}}">{{ $value_sp->ten_san_pham }}</a>
                                                    </h4>
                                                    <div class="product-meta">
                                                        <div class="pro-price">
                                                            <span>{{ number_format($value_sp->gia_khuyen_mai, 0, ',', '.') }} đ</span>
                                                            <span class="old-price">{{ number_format($value_sp->gia_ban, 0, ',', '.') }} đ</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-wishlist">
                                                        <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Đăng Nhập/Đăng Ký</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="basic-login" style="padding: 0px !important; border: 0px">
                                        <h3 class="text-center mb-60">Login From Here</h3>
                                        <label>Email Address <span>**</span></label>
                                        <input v-model="user.email" type="text" placeholder="Enter Email address...">
                                        <label>Password <span>**</span></label>
                                        <input v-model="user.password" type="text" placeholder="Enter password...">
                                        <div class="login-action mb-20 fix">
                                            <span class="log-rem f-left">
                                                <input id="remember" type="checkbox">
                                                <label for="remember">Remember me!</label>
                                            </span>
                                            <span class="forgot-login f-right">
                                                <a href="#">Lost your password?</a>
                                            </span>
                                        </div>
                                        <button v-on:click="login" class="btn theme-btn-2 w-100" data-dismiss="modal">Login Now</button>
                                        <div class="or-divide"><span>or</span></div>
                                        <a href="/register" class="btn theme-btn w-100">Register Now</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
