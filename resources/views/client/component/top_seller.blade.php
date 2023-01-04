<section class="top-seller-area box-90">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-7">
                <div class="area-title mb-50">
                    <h2>Top Sellers</h2>
                    <p>Browse the huge variety of our products</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-4 col-md-5">
                <div class="vue-btn text-left text-md-right mb-50">
                    <a href="shop.html" class="btn theme-btn">Collection</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="top-seller mb-50">
                    <img src="{{$topSell[0]->hinh_anh}}" alt="">
                    <div class="seller-box text-center">
                        <div class="top-seller-content text-left">
                            <h2 class=""><a href="/product-detail">{{$topSell[0]->ten_san_pham}}</a></h2>
                            <div class="pro-price mb-25">
                                <span>{{$topSell[0]->gia_khuyen_mai}} đ</span>
                                <span class="old-price">{{$topSell[0]->gia_ban}} đ</span>
                            </div>
                            <div class="top-seller-btn">
                                <a href="/product-detail" class="btn theme-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-7">
                <div class="top-seller text-right mb-50">
                    <img src="{{$topSell[1]->hinh_anh}}" alt="">
                    <div class="sellet-2-content">
                        <h2><a href="/product-detail">{{$topSell[1]->ten_san_pham}}</a></h2>
                        <div class="pro-price mb-25">
                            <span>{{$topSell[1]->gia_khuyen_mai}} đ</span>
                            <span class="old-price">{{$topSell[1]->gia_ban}} đ</span>
                        </div>
                        <div class="top-seller-btn">
                            <a href="/product-detail" class="btn theme-btn-2 mr-20">view details</a>
                            {{-- <a href="#" class="shop-btn"><i class="flaticon-shopping-cart"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
