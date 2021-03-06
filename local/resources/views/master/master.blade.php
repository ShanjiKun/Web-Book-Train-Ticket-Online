<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfDPUTzRzRJvZuqaMIcz3U1mrJnHJsEQ9BxPs0LGetcgpw6Hl6">
		<title>@yield('title')</title>

		<link rel="stylesheet" type="text/css" href="{{ asset('/css/master/master.css') }}">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="{{ asset('/js/master/master.js') }}"></script>
	</head>
	<body>
		<div class="banner">
			<div class="banner-container">
				<div class="banner-left">
					<div class="banner-left-logo">
						
					</div> <!-- banner-left-logo -->
					<div class="banner-left-time">
						<p>Chủ nhật, 05/03/2017</p>
					</div> <!-- banner-left-time -->
				</div> <!-- banner-left -->
			</div> <!-- banner-container -->
		</div> <!-- banner -->

		<div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
		    <div class="container-fluid">
		        <div class="navbar-header">
		        	<a class="navbar-brand" href="/">Home</a>
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
		            </button>
		        </div>
		        <div class="collapse navbar-collapse navbar-menubuilder">
		            <ul class="nav navbar-nav navbar-left">
		                <li><a href="/timve">TÌM VÉ</a>
		                </li>
		                <li><a href="/thongtindatcho">THÔNG TIN ĐẶT CHỖ</a>
		                </li>
		                <li><a href="/kiemtrave">KIỂM TRA VÉ</a>
		                </li>
		                <li><a href="/giotau">GIỜ TÀU</a>
		                </li>
		                <li><a href="/khuyenmai">KHUYẾN MÃI</a>
		                </li>
		                <li><a href="/quydinh">CÁC QUY ĐỊNH</a>
		                </li>
		                <li><a href="/huongdan">HƯỚNG DẪN</a>
		                </li>
		                <li><a href="/lienhe">LIỆN HỆ</a>
		                </li>
		            </ul>
		        </div>
		    </div>
		</div> <!-- custom-bootstrap-menu -->

		<div class="custom-container">
			<div class="adv-left">
				<img src="http://dsvn.vn/images/dsvn1.jpg">
			</div>
			<div class="content-container">
				<!-- MAIN -->
				@yield('content')

			</div>
			<div class="adv-right">
				<img src="http://dsvn.vn/images/dsvn2.jpg">
			</div>
			<div class="footer text-center">
                <a href="/timve" ng-bind-html="'Menu_search'|translate" class="ng-binding">Tìm vé</a>&nbsp;|&nbsp;
                <a href="/thongtindatcho" ng-bind-html="'Menu_searchBookingInfo'|translate" class="ng-binding">Thông tin đặt chỗ</a>&nbsp;|&nbsp;
                <a href="/giotau" ng-bind-html="'Menu_trainTimeTable'|translate" class="ng-binding">Giờ tàu</a>&nbsp;|&nbsp;
                <a href="/huongdan" ng-bind-html="'Menu_guide'|translate" class="ng-binding">Hướng dẫn</a>&nbsp;|&nbsp;
                <a href="/lienhe" ng-bind-html="'Menu_contact'|translate" class="ng-binding">Liên hệ</a>
            </div>
            <div class="row et-footer-logo-group">

                <div class="et-col-md-12 et-footer-logo">
                    <div class="et-col-md-12 text-center" style="font-size: 10px; color: #999;">
                        <div ng-bind-html="'Footer_line1'|translate" class="ng-binding">Tổng công ty Đường  sắt Việt Nam. Số 118 Lê Duẩn, Hoàn Kiếm, Hà Nội. Điện thoại: 19006469. Email: dsvn@vr.com.vn.</div>
                        <div ng-bind-html="'Footer_line2'|translate" class="ng-binding">Giấy chứng nhận ĐKKD số 113642 theo QĐ thành lập số 973/QĐ-TTg ngày 25/06/2010 của Thủ tướng Chính phủ.</div>
                        <div ng-bind-html="'Footer_line3'|translate" class="ng-binding">Mã số doanh nghiệp: 0100105052, đăng ký lần đầu ngày 26/07/2010, đăng ký thay đổi lần 4 ngày 27/06/2014 tại Sở KHĐT Thành phố Hà Nội.</div>
                    </div>
                </div>

                <div class="et-col-md-12 text-center" style="font-size: 10px; color: #999;">
                    <img src="http://dsvn.vn/images/fptlogo.png" width="28" height="17">
                    Copyright by FPT Technology Solutions
                </div>
            </div>
		</div> <!-- container -->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>