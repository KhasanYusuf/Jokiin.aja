@extends('base')
@section('home', 'class=active')
@section('content')

    <!-- Slider -->
    <div class="slider-area">
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								MOBILE LEGEND
                                <!-- <span class="primary">6 <strong>Plus</strong></span> -->
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Order now</a>
						</div>
					</li>
					<li><img src="img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								FREE FIRE
                                <!-- <span class="primary">50% <strong>off</strong></span> -->
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Order now</a>
						</div>
					</li>
					<li><img src="img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Valorant
                                <!-- <span class="primary">Store <strong>Ipod</strong></span> -->
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Order now</a>
						</div>
					</li>
					<li><img src="img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Steam
                                <!-- <span class="primary">Store <strong>Ipod</strong></span> -->
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Order now</a>
						</div>
					</li>
					<li><img src="img/h4-slide7.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Epic Game
                                <!-- <span class="primary">Store <strong>Ipod</strong></span> -->
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Order now</a>
						</div>
					</li>
				</ul>
			</div>
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <h2 class="section-title">Latest Products</h2>
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div> -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <img src="img/brand1.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <img src="img/brand3.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <img src="img/brand2.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <img src="img/brand5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            @foreach ($posts as $post)
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <!-- Pilih gambar pertama atau gunakan default -->
                                            <img src="{{ $post->images->first() ? asset('storage/post_images/' . $post->images->first()->image_path) : asset('img/default.png') }}" alt="Product Image">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="{{ route('posts.show', $post->id) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                                        <p>by <strong>{{ $post->user->name }}</strong></p> <!-- Nama pembuat post -->
                                        <div class="product-carousel-price">
                                            <ins>Rp{{ number_format($post->price, 2) }}</ins>
                                            <del>Rp{{ number_format($post->price * 1.2, 2) }}</del>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <!-- Pagination -->
                            <div class="pagination-wrapper">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <!-- <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Top Up Steam Wallet</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Top Up Game</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Joki Rank/Bintang</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Valorant Leveling Up</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Top Up Steam Wallet</a></h2>
                            <div class="user-product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Top Up Game</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Joki Rank/Bintang</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Valorant Leveling Up</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="user-single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="user-single-product.html">Top Up Steam Wallet</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- End product widget area -->

@endsection
