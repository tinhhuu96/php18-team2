@extends('layouts.master')
@section('content')
<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="{{ url($product->images)}}" alt="{{ $product->name }}" title="{{ $product->name }}" />
			<!-- <h3>ZOOM</h3> -->
		</div>
		

	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<img src="{{ asset('images/product-details/new.jpg') }}" class="newarrival" alt="" />
			<h2>{{ $product->name}}</h2>
			<!-- <p>Web ID: 1089772</p> -->
			<span>
				<span style="font-size: 25px !important">{{ number_format($product->price, 0, ',', ',') . 'đ'}}</span>
				<label>Số lượng:</label>
				<input type="text" value="1"/>
				
			</span>
			<button type="button" class="btn btn-fefault cart" style="display: block; margin-left: 0px !important">
					<i class="fa fa-shopping-cart"></i>
					Add to cart
				</button>
			<p><b>Thông tin:</b> {{ $product->detail }}</p>
			@if ( $product->quantity > 0) 
			<p><b>Tình trạng:</b><b style="color: red"> Còn hàng </b></p>
			@else
			<p><b>Tình trạng:</b><b style="color: red"> Hết hàng </b></p>
			@endif
			<p><b>Nhà Sản Xuất:</b><?php  $brand = App\Brand::find($product->brand_id); echo ' '.$brand->name; ?></p>
			<a href=""><img src="{{ asset('images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li><a href="#details" data-toggle="tab">Thông Số Kỹ Thuật</a></li>
			<!-- <li><a href="#companyprofile" data-toggle="tab">Sản Phẩm Tương Tự</a></li> -->
			<!-- <li><a href="#tag" data-toggle="tab">Tag</a></li> -->
			<li class="active"><a href="#reviews" data-toggle="tab">Bình Luận (5)</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade" id="details" >
			<div class="tableparameter"></div>
			<?php  $parameters = App\Parameter::where('product_id', '=' , $product->id)->get();  ?> 
			@foreach ($parameters as $parameter)
			<ul class="parameter">
				<li>
					<span>{{ $parameter->name }} </span>
					<div>{{ $parameter->parameters }}</div>
				</li>
				
			</ul>
			@endforeach
		</div>
		

		<div class="tab-pane fade" id="tag" >
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/gallery1.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/gallery2.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/gallery3.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/gallery4.jpg" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab-pane fade active in" id="reviews" >
			<div class="col-sm-12">
				<ul>
					<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
					<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
					<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<p><b>Write Your Review</b></p>
				
				<form action="#">
					<span>
						<input type="text" placeholder="Your Name"/>
						<input type="email" placeholder="Email Address"/>
					</span>
					<textarea name="" ></textarea>
					<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
					<button type="button" class="btn btn-default pull-right">
						Submit
					</button>
				</form>
			</div>
		</div>
		
	</div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Sản Phẩm Tương Tự</h2>
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php  $product_similars = App\Product::where('brand_id', '=' , $product->brand_id)->take(3)->get();  ?> 
			@foreach ($product_similars as $product_similar)
			<div class="item active">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ url($product_similar->images) }}" alt="$product_similar->name" title="$product_similar->name" style="height: 250px"  />
								<h2>{{ number_format($product_similar->price, 0, ',', ',') . 'đ' }}</h2>
								<p>{{ $product_similar->name }}</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<div class="item">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="images/home/recommend1.jpg" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							
						</div>
					</div>
				</div>
			
				
			</div>
		</div>
		 <!-- <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		  </a>
		  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		  </a>		 -->	
	</div>
</div><!--/recommended_items-->
<!--/recommended_items-->
@stop