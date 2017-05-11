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
		    margin-bottom: 30px;
		}
		.alert{
			margin: 0px 15px 0px 15px;
			padding: 15px;
			background-color: #d9edf7;
		    border-color: #bce8f1;
		    color: #3a87ad;		    
		    border: 1px solid transparent;
		    border-radius: 4px;
		}
		.alert-p1{
			text-align: right;
		}
		.alert-p2{
			font-weight: bold;
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
				        	$('#warning').css('display', 'block');
				        	$('#btns-CA').css('display', 'none');
				        	$('#btn-home').css('display', 'block');
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
				THANH TOÁN ĐƠN HÀNG
			</div>
			<div id="warning" class="alert form-group" style="margin-bottom: 10px; display: none;" >
				<p>
					Thời gian thanh toán đã kết thúc, đơn hàng sẽ bị hủy, quý khác đã hết thời gian tạm giữ vé. Xin vui lòng quay lại <a href="">Trang chủ</a> để đặt vé.
				</p>
			</div>
			<div class="col-md-12">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h5 style=" color: #3a87ad; text-align: right; font-weight: 700;">Thời gian thanh toán <span id='clock' style="font-weight: bold; color: red;">{{$payTime}}</span> giây</h5>
					<script type="text/javascript">
						newClock('clock', {{$payTime}});
					</script>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="col-md-12" style="margin-bottom: 10px;">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h5 style=" color: #e55a05; font-weight: 700; padding-left: 15px;">Thông tin đơn hàng</h5>
					<div class="col-md-12 alert">
						<div class="col-md-6">
							<p class="alert-p1">
								Đơn hàng:
							</p>
						</div>
						<div class="col-md-6">
							<p class="alert-p2">
								{{$billID}}
							</p>
						</div>
						<div class="col-md-6">
							<p class="alert-p1">
								Giá trị thanh toán:
							</p>
						</div>
						<div class="col-md-6">
							<p class="alert-p2">
								{{$sumFare}},000 VND
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="col-md-12" style="margin-bottom: 20px;">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h5 style=" color: #e55a05; font-weight: 700; padding-left: 15px;">Nhập thông tin thẻ ATM</h5>
					<div class="col-md-12 alert">
						<div class="col-md-6">
							<p class="alert-p1">
								Chọn ngân hàng:
							</p>
						</div>
						<div class="col-md-6" style="margin-bottom: 15px;">
							<select id="bankID">
							@foreach($banks as $bank)
								<option value="{{$bank->bankID}}">{{$bank->name}}</option>
							@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<p class="alert-p1">
								Nhập tên chủ thẻ:
							</p>
						</div>
						<div class="col-md-6">
							<input id="accountHolder" type="text" class="form-group" name="">
						</div>
						<div class="col-md-6">
							<p class="alert-p1">
								Nhập số thẻ:
							</p>
						</div>
						<div class="col-md-6">
							<input id="cardID" type="text" class="form-group" name="">
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="payment">
				<div class="col-md-5"></div>
				<div id='btns-CA' class="col-md-3">
					<a style="float: left;" class="btn" onclick="onCancel();">Hủy</a>
					<a style="float: right;" class="btn" onclick="onAccept();">Chấp nhận</a>
				</div>
				<div id='btn-home' style="display: none;" class="col-md-3">
					<a class="btn" href="Web-Book-Train-Ticket-Online/">Trang chủ</a>
				</div>
				<div class="col-md-4"></div>
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
	<script type="text/javascript">
		var billID = {{$billID}};
		function onCancel(){

		}
		function onAccept(){
			var bankID = $('#bankID').val();
			var accountHolder = $('#accountHolder').val();
			var cardID = $('#cardID').val();

			if(!validate(bankID, accountHolder, cardID)) return;

			$.post('payment-online',{
				billID: billID,
				bankID: bankID,
				accountHolder: accountHolder,
				cardID: cardID
			},function(data, status){
				if(status != 'success') return;

				var response = JSON.parse(data);
				switch(parseInt(response.code)){
					case 0:
						window.location.href = 'payment-success?billID='+response.data.billID;
						break;
					case 4:
						alert(response.message);
						break;
					case 6:
						alert(response.message);
						break;
					case 7:
						alert(response.message);
						break;
					default:
						alert(response.message);
						break;
				}
			});
		}
		function validate(bankID, accountHolder, cardID){
			if(bankID.length == 0 || accountHolder.length == 0 || cardID.length == 0){
				alert('Vui lòng điền đầy đủ thông tin!');
				return false;
			}
			return true;
		}
	</script>
</body>
</html>