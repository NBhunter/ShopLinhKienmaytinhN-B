@extends('layouts.app')
@section('body')
<!-- Thẻ Chứa Slideshow -->

<div id="slideshow">
  <div class="slide-wrapper" style="--ratio: 4 / 3;">
    <div class="slide"><img src="{{ asset('image\slide_img\img_main_1.jpg') }}" style="width:100% "></div>
    <div class="slide"><img src="{{ asset('image\slide_img\img_main_2.jpg') }}" style="width:100%"></div>
    <div class="slide"><img src="{{ asset('image\slide_img\img_main_3.jpg') }}" style="width:100%"></div>
    <div class="slide"><img src="{{ asset('image\slide_img\img_main_4.jpg') }}" style="width:100%"></div>
    <div class="slide"><img src="{{ asset('image\slide_img\img_main_5.jpg') }}" style="width:100%"> </div>
  </div>
</div>
<h2 class="new-product-title" style = "margin: 0;
    font-size: 22px;
    background: #d7202c;
    padding: 10px 20px;
    color: #fff;
    min-width: 100%;
    display: inline-block;">NB COMPUTER - MIỄN PHÍ GIAO HÀNG TOÀN QUỐC  </h2>
    
    <a class="new-products-hot-view-all" style = "text-align: right;"href="/collections/top-pc-ban-chay">
				Xem tất cả <i class="fa fa-chevron-right"></i>
			</a>
			<div class="row shop_container list">
      @foreach ($data['products'] as $value)
							<div class="col-lg-3 col-md-4 col-6">
								<div class="product">
									<div class="product_img">
										<a href="">
											<img src="{{  './image/products/' . $value->image }}" alt="product_img1" style = "max-height: 100%; " >
										</a>
										<div class="product_action_box">
											<ul class="list_none pr_action_btn">
												<li class="add-to-cart"><a href=""><i class="icon-basket-loaded"></i> Thêm vào giỏ hàng</a></li>
												<li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
												<li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
												<li><a href="#"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product_info">
										<h6 class="product_title"><a href="">{{$value->title}}</a></h6>
										<div class="product_price">
											<span class="price">{{ number_format($value->price) }}<sup>đ</sup></span>
											<del>{{ number_format($value->price * 1.1) }}<sup>đ</sup></del>
											<div class="on_sale">
												<span>Giảm giá 10%</span>
											</div>
										</div>
										<div class="rating_wrap">
											<div class="rating">
												<div class="product_rate" style="width:80%"></div>
											</div>
											
										</div>
										<div class="pr_desc">
											<p>{{ $value->product_desc }}.</p>
										</div>
										<div class="pr_switch_wrap">
											<div class="product_color_switch">
												<span class="active" data-color="#87554B"></span>
												<span data-color="#333333"></span>
												<span data-color="#DA323F"></span>
											</div>
										</div>
										<div class="list_product_action_box">
											
										</div>
									</div>
								</div>
							</div>
							@endforeach
</div>
</ul>

	
@endsection