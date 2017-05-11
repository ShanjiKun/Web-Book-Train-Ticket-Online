<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfDPUTzRzRJvZuqaMIcz3U1mrJnHJsEQ9BxPs0LGetcgpw6Hl6">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/passenger-information/passenger-information.css') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<title>Nhập thông tin khác hàng</title>
	<style type="text/css">
		body{
			background: #F0F1F3 !important;
			margin: 0px;
		}
		*{
			font-family: Verdana !important;
		}
		.banner{
			background-color: #0091d4;
			width: 100%;
			height: 84px;
		}
		.banner-container{
			width: 80%;
			height: 100%;
			margin: 0px 10%;
		}
		.banner-left{
			width: 50%;
			height: 100%;
			float: left;
		}
		.banner-left-logo{
			float: left;
			width: 240px;
			height: 100%;
			background-image: url('http://dsvn.vn/images/LOGO_n.png');
		}
		.banner-left-time{
			float: left;
			color: white;
			width: 260px;
			padding-top: 60px;
		}
		.banner-right{
			width: 20%;
			height: 100%;
			float: right;
			padding: 50px 20px 5px 20px;
		}

		.contents{
			margin: 0px 128px 0px 128px;
			padding: 30px 0px;
			background: white;
		}
		.head1{
			background: url(http://dsvn.vn/images/label_bg.png) right bottom no-repeat #0082c4;
			padding: 5px 40px 5px 10px;
		    margin-left: 15px;
		    color: #fff;
		    font-family: Verdana;
		    width: 300px;
		    margin-bottom: 15px;
		}
		.alert{
			margin: 0px 15px 20px 15px;
			padding: 15px;
			background-color: #d9edf7;
		    border-color: #bce8f1;
		    color: #3a87ad;		    
		    border: 1px solid transparent;
		    border-radius: 4px;
		}
		.tickets-information{
			padding: 0px 15px;
		}
		.table{
			border: 1px solid #ddd;
			width: 100%;
		    max-width: 100%;
		    margin-bottom: 20px;
		}
		.table th, td{
			border: 1px solid #ddd;
			text-align: center;
			font-size: 12px;
		}
		.seat-info{
			text-align: left;
		}
		.trash-ticket{
			color: red;
		}
		.payment{
			padding: 10px 30px 10px 30px;
		}
		.btn{
			padding: 2px 10px;
		    background-color: #0686b7;
		    border: 1px solid #faf8f9;
		    box-shadow: 1px 1px 1px 1px #d7d7d7;
		    color: #fff;
		    text-decoration: none;
		    min-width: 40px;
		    font-size: 16px;
		}
		/*footer*/
		.footer {
		    margin-top: 20px;		
		    padding: 0px 15px 15px 15px;
		}
		.text-center{
			text-align: center;
		}
		/*footer*/
	</style>
	<script type="text/javascript">
		var clocks = {}; //{"1234Clock": CLOCK}
		function newClock(eID, time){
			var Clock = {
				totalSeconds: time,
				start: function () {
				    var self = this;
				    function pad(val) { return val > 9 ? val : "0" + val; }
				    this.interval = setInterval(function () {
				        self.totalSeconds--;
				        $('#'+eID).html(self.totalSeconds);
				        if(self.totalSeconds==0){
				        	self.pause();
				        	$('#'+eID+'-normal').css('display', 'none');
				        	$('#'+eID+'-warning').css('display', 'block');
				        }
				    }, 1000);
				},
				pause: function () {
				    clearInterval(this.interval);
				    delete this.interval;
				},
				resume: function () {
				    if (!this.interval) this.start();
				}
			};
			if(clocks[eID] !== undefined) clocks[eID].pause();
			clocks[eID] = Clock;
			Clock.start();
		}	
	</script>
</head>
<body>
	<div class="banner">
		<div class="banner-container">
			<div class="banner-left">
				<div class="banner-left-logo">
					
				</div> <!-- banner-left-logo -->
				<div class="banner-left-time">
					Thứ Bảy, 13/05/2017
				</div> <!-- banner-left-time -->
			</div> <!-- banner-left -->
			<div class="banner-right">
				<div id='user-area' class="row">

				</div>
			</div>
		</div> <!-- banner-container -->
	</div> <!-- banner -->
	<div class="contents">
		<div class="container-fluid">
			<div class="head1">
				ĐẶT MUA VÉ THÀNH CÔNG
			</div>
			<div class="alert">
				<p class="alert-p2">
					Cám ơn quý khách đã sử dụng dịch vụ vận chuyển hành khách của Tổng công ty Đường sắt Việt Nam. Quý khách đã thực hiện đặt vé thành công.
				</p>
				<p class="alert-p2">
					Mã thanh toán: <span style="font-size: 16px; font-weight: bold;">{{$bill}}</span>
				</p>
				<p class="alert-p2">
					Quý khách vui lòng sử dụng mã thanh toán <span style="font-size: 16px; font-weight: bold;">{{$bill}}</span> để thực hiện giao dịch thanh toán tại các đại lý thu tiền ủy quyền của Tổng công ty đường sắt Việt Nam.
				</p>
			</div>
			<div class="tickets-information">
				<h6 style=" color: #e55a05; font-weight: 700;">Thông tin vé</h6>
				<table class="table">
					<tr style="background-color: #eee;">
						<th style="width: 150px">Mã vé</th>
						<th style="width: 150px">Họ tên</th>
						<th>Số CMND/ Hộ chiếu/ Ngày tháng năm sinh trẻ em</th>
						<th style="width: 130px">Đối tượng</th>
						<th style="width: 150px">Thông tin chỗ</th>
						<th style="width: 84px">Trạng thái</th>
						<th style="width: 100px">Thành tiền</th>
					</tr>
				<?php $cost = 0; ?>
				@foreach($data as $item)
					<tr>
						<td>{{$item->tcID}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->id}}</td>
						<td>{{$item->typePass}}</td>
						<td>
							<p>{{$item->info}}</p>
							<p>{{$item->typeSeat}}</p>
						</td>
						<td>{{$item->state}}</td>
						<td>{{$item->cost}}</td>
					</tr>
					<?php $cost+= $item->cost;?>
				@endforeach
					<tr style="background-color: #d9edf7;">
						<td colspan="6" style="border: none;">
							<p style="font-weight: bold; text-align: right;">Tổng tiền</p>
						</td>
						<td>
							<p id="total-cost" style="font-weight: bold;">{{$cost}},000</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="alert">
				<p id="clock-normal" class="alert-p2">
					Vé của quý khách đã được tạm khóa trong vòng 24 tiếng(<span id="clock" style="color: red; font-size: 16px;">{{$ownTime}}</span> giây). Quý khách vui lòng thanh toán trước thời hạn.
				</p>
				<p id="clock-warning" style="display: none; color: #3a87ad;"><span style="color: red; font-size: 16px;">!</span> Hết TG giữ vé</p>
				<script type="text/javascript">
					newClock('clock', {{$ownTime}});
				</script>
			</div>
			<div class="payment">
				<div class="col-md-12">
					<a style="float: right;" class="btn" href="Web-Book-Train-Ticket-Online/">Trang chủ >></a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="row et-footer-logo-group">

	        <div class="col-md-12 et-footer-logo">
	            <div class="col-md-12 text-center" style="font-size: 10px; color: #999;">
	                <div ng-bind-html="'Footer_line1'|translate" class="ng-binding">Tổng công ty Đường  sắt Việt Nam. Số 118 Lê Duẩn, Hoàn Kiếm, Hà Nội. Điện thoại: 19006469. Email: dsvn@vr.com.vn.</div>
	                <div ng-bind-html="'Footer_line2'|translate" class="ng-binding">Giấy chứng nhận ĐKKD số 113642 theo QĐ thành lập số 973/QĐ-TTg ngày 25/06/2010 của Thủ tướng Chính phủ.</div>
	                <div ng-bind-html="'Footer_line3'|translate" class="ng-binding">Mã số doanh nghiệp: 0100105052, đăng ký lần đầu ngày 26/07/2010, đăng ký thay đổi lần 4 ngày 27/06/2014 tại Sở KHĐT Thành phố Hà Nội.</div>
	            </div>
	        </div>

	        <div class="col-md-12 text-center" style="font-size: 10px; color: #999;">
	            <img src="http://dsvn.vn/images/fptlogo.png" width="28" height="17">
	            Copyright by FPT Technology Solutions
	        </div>
	    </div>
	</div>
</body>
</html>