<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfDPUTzRzRJvZuqaMIcz3U1mrJnHJsEQ9BxPs0LGetcgpw6Hl6">

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
		    width: 190px;
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
				THÔNG TIN GIỎ VÉ
			</div>
			<div class="alert">
				<p class="alert-p1">
					Các vé có biểu tượng <span style="color: red;">!</span> là các vé bị hết thời gian tạm giữ. Xin vui lòng loại bỏ các vé này khỏi danh sách vé đặt mua trước khi thực hiện giao dịch thanh toán tiền.
				</p>
				<p class="alert-p2">
					Quý khách vui lòng điền đầy đủ, chính xác tất cả các thông tin về hành khách đi tàu bao gồm: Họ tên đầy đủ, số giấy tờ tùy thân (Số chứng minh nhân dân hoặc số hộ chiếu hoặc số giấy phép lái xe đường bộ được pháp luật Việt Nam công nhận hoặc ngày tháng năm sinh nếu là trẻ em hoặc thẻ sinh viên nếu là sinh viên). Để đảm bảo an toàn, minh bạch trong quá trình bán vé các thông tin này sẽ được nhân viên soát vé kiểm tra trước khi lên tàu theo đúng các quy định của Tổng công ty Đường sắt Việt Nam.
				</p>
			</div>
			<div class="tickets-information">
				<table class="table">
					<tr style="background-color: #eee;">
						<th style="width: 180px">Họ tên</th>
						<th>Số CMND/ Hộ chiếu/ Ngày tháng năm sinh trẻ em</th>
						<th style="width: 110px">Đối tượng</th>
						<th style="width: 170px">Thông tin chỗ</th>
						<th style="width: 76px">Giá vé</th>
						<th style="width: 84px">Giảm đối tượng</th>
						<th style="width: 100px">Thành tiền</th>
						<th style="width: 25px"></th>
					</tr>
					<tr>
						<td>
							<input type="text" class="form-control" name="" placeholder="Họ tên">
						</td>
						<td>
							<input type="text" class="form-control" name="" placeholder="Số CMND/ Hộ chiếu/ Ngày tháng năm sinh trẻ em">
						</td>
						<td>
							<select class="form-control">
								<option value="NL">Người lớn</option>
								<option value="TE">Trẻ em</option>
								<option value="HSSV">Sinh viên</option>
							</select>
						</td>
						<td>
							<div class="seat-info">
								<div>SE7 Quang Ngai-Da</div>
								<div>05/05/2015 05:55</div>
								<div>NCL toa 5 cho 55</div>
							</div>
						</td>
						<td>
							<p>550,000</p>
						</td>
						<td>
							<p>0</p>
						</td>
						<td>
							<p>550,000</p>
						</td>
						<td>
							<div class="trash-ticket">
								<p>123</p>
								<img src="http://dsvn.vn/images/del30.png" width="32px" height="24px">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" class="form-control" name="" placeholder="Họ tên">
						</td>
						<td>
							<input type="text" class="form-control" name="" placeholder="Số CMND/ Hộ chiếu/ Ngày tháng năm sinh trẻ em">
						</td>
						<td>
							<select class="form-control">
								<option value="NL">Người lớn</option>
								<option value="TE">Trẻ em</option>
								<option value="HS">Học sinh</option>
							</select>
						</td>
						<td>
							<div class="seat-info">
								<div>SE7 Quang Ngai-Da</div>
								<div>05/05/2015 05:55</div>
								<div>NCL toa 5 cho 55</div>
							</div>
						</td>
						<td>
							<p>550,000</p>
						</td>
						<td>
							<p>0</p>
						</td>
						<td>
							<p>550,000</p>
						</td>
						<td>
							<div class="trash-ticket">
								<p>123</p>
								<img src="http://dsvn.vn/images/del30.png" width="32px" height="24px">
							</div>
						</td>
					</tr>
					<tr style="background-color: #d9edf7;">
						<td style="border: none;"></td>
						<td style="border: none;"></td>
						<td style="border: none;"></td>
						<td style="border: none;"></td>
						<td style="border: none;"></td>
						<td style="border: none;">
							<p style="font-weight: bold;">Tổng tiền</p>
						</td>
						<td>
							<p style="font-weight: bold;">1,100,000</p>
						</td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="payment">
				<h5 style=" color: #e55a05; font-weight: 700;">Phương thức thanh toán</h5>
				<div class="col-md-12 form-group">
					<div class="col-md-3">
						<input type="radio" name="payment-radio" value="1" checked="checked">
						<span>Thanh toán trực tuyến</span>
					</div>
					<div class="col-md-3">
						<input type="radio" name="payment-radio" value="2">
						<span>Trả sau</span>
					</div>
				</div>
				<div class="col-md-12 form-group">
					<input type="checkbox" name="agree-term">
					<span>Tôi đã đọc kỹ và đồng ý tuân thủ tất cả các <a href="">quy định mua vé trực tuyến</a>, <a href="">các chương trình khuyến mại</a> của Tổng công ty đường sắt Việt Nam và chịu trách nhiệm về tính xác thực của các thông tin trên.</span>
				</div>
				<div class="col-md-12">
					<a style="float: right;" class="btn" onclick="">Tiếp theo>></a>
					<a href="search" style="float: left;" class="btn" onclick=""><< Quay lại</a>
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