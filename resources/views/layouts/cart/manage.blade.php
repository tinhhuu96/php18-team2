<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('/')}}"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								@if ( Cart::count() > 0 )
								<li><a id="cart" href="{{ url('carts')}}"><i class="fa fa-shopping-cart"></i><span id="count"> Giỏ Hàng({{ Cart::count() }})</span></a></li>
								@else
								<li><a id="cart" href="{{ url('carts')}}" ><i class="fa fa-shopping-cart"></i><span id="count"> Giỏ Hàng</span></a></li>
								@endif
								@if (Auth::check())
								<li>
									<a href="{{ url('carts/manage')}}"> <i class="fa fa-check-circle-o"></i>Quản lý đơn hàng</a>
								</li>
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    	{{ Auth::user()->name }} <span class="caret"></span>
                                	</a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
								</li>
								
								@else
								<li><a href="{{ url('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Đăng Nhập</a></li>
								<li><a href="{{ url('register') }}"><i class="fa fa-lock"></i> Đăng Ký</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Laptop</a></li>
								<li class="dropdown"><a href="#">Điện Thoại<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Điện thoại</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Máy Tính Bảng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								
								<li><a href="contact-us.html">Liên Hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="search_box pull-right">
							<form action="{{ url('/search')}}" method="get">
								<input type="text" placeholder="Search" id="keyword" name="keyword" />
								<button type="submit" class="btn btn-search">Tìm kiếm</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	@if(count($orders) > 0)
	<section id="cart_items" style="margin-bottom: 50px !important">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Manage Basket</li>
				</ol>
		</div>

		 <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Đơn Hàng Gần Đây</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
           	<table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Ngày Đặt Hàng</th>
                  <th>Trạng Thái</th>
                  <th>Địa Chỉ Giao Hàng</th>
                  <th>Tình Trạng Giao Hàng</th>
                  <th>Số Điện Thoại</th>
                  <th>Tên Người Nhận</th>
                  <th>Người Đặt Hàng</th>
                  <th>Hủy Đơn Đặt Hàng</th>
                  <th>Xem Chi Tiết</th>
                </tr>
                </thead>
                <tbody>
	                @foreach ($orders as $order)
		             <tr>
		                  <td>{{ $order ->id}}</td>
		                  <td>{{ $order ->date}}</td>
		                  <td>{{ $order ->status}}</td>
		                  <td>{{ $order ->address_order}}</td>
		                  <td>{{ $order ->shipping_status}}</td>
		                  <td>{{ $order ->phone}}</td>
		                  <td>{{ $order ->name_receiver}}</td>
		                  <td>{{ App\User::find($order->user_id)->name}}</td>
		                  @if( $order->status == 'avalible')
		                  <td style="text-align: center;">
			                  <a href="{{ url('carts/manage/' . $order->id . '/cancel')}}">
			                  	Hủy
			                  </a>
			              </td>
		                  @else
		                  <td style="text-align: center; vertical-align: middle;">Không khả dụng</td>
		                  @endif
		                  <td><a href="{{ url('carts/manage/' . $order->id .'/detail') }}">Xem chi tiết</a></td>
	                </tr>
	                @endforeach
                </tbody>            
             </table>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
		</div>
		
	</section>
	@else
	<section>
		<div class="container">
			<div class="" style="text-align: center; margin: 10px">
	        <h3 class="">Không Tìm Thấy Đơn Hàng</h3>
		        <a href="{{ url('/')}}" class="btn btn-primary btn-lg active" role="button">Tiếp tục mua hàng</a>
	    </div>
		</div>
	</section>
	@endif





	<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>DỊCH VỤ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hỗ Trợ Trực Tuyến</a></li>
								<li><a href="#">Liên Hệ </a></li>
								<li><a href="#">Tình Trạng Đặt Hàng</a></li>
								<li><a href="#">Thay Đổi Địa Điểm</a></li>
								<li><a href="#">Câu Hỏi Thường Gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>SẢN PHẨM</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Laptop</a></li>
								<li><a href="#">Điện Thoại</a></li>
								<li><a href="#">Máy Tính Bảng</a></li>
								<li><a href="#">Déktop</a></li>
								<li><a href="#">Phụ Kiện</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>CHÍNH SÁCH</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều Khoản Sử Dụng</a></li>
								<li><a href="#">Chính Sách privecy</a></li>
								<li><a href="#">Chính Sách Hoàn Tiền</a></li>
								<li><a href="#">Hệ Thống Thanh Toán</a></li>
								<li><a href="#">Hệ Thống Vé</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>GIỚI THIỆU VỀ SHOP</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông Tin</a></li>
								<li><a href="#">Tuyển Dụng</a></li>
								<li><a href="#">Vị Trí Shop</a></li>
								<li><a href="#">Chương Trình Khuyến Mãi</a></li>
								<li><a href="#">Bản Quyền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>EMAIL</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhận các cập nhật gần đây nhất từ trang </br>web của chúng tôi...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
				
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
    function ud_find_text(self) {
	    var children = self.parentNode.getElementsByTagName('input');
	    for (var i = 0; i < children.length; i++) {
	        if (children[i].getAttribute('type') == 'text') {
	            return children[i];
	        }
	    }
	}

    function ud_inc(self) {
    	var text = ud_find_text(self);
    	text.value++;
	}

	function ud_dec(self) {
	    var text = ud_find_text(self);
	    if (text.value > 0) text.value--;
	}

    </script>
</body>
</html>