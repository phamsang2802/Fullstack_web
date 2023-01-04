<section class="banner-area pt-30 pl-15 pr-15">
    <div class="container-fluid">
        <div class="row">
            @foreach ($banner as $value)
                <div class="col-lg-4 col-md-6">
                    <div class="banner mb-30">
                        <a href="/product-detail"><img src="{{$value->hinh_anh}}" style="height: 400px;"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
