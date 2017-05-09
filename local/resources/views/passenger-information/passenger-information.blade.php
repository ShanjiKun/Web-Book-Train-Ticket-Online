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
				        	$('#'+eID).html('!');
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

		var seatsInfo = []; //[{ticketID: 12, fullName: NVA, ID: 123456789, typePass: HSSV}]	
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
						<th style="width: 130px">Đối tượng</th>
						<th style="width: 150px">Thông tin chỗ</th>
						<th style="width: 76px">Giá vé</th>
						<th style="width: 84px">Giảm đối tượng</th>
						<th style="width: 100px">Thành tiền</th>
						<th style="width: 25px"></th>
					</tr>
					@foreach($waitSeats as $ws)
					<script type="text/javascript">
						<?php $seatInfoID = $ws->ticketID.'-'.$ws->tripID.'-'.$ws->stationIDLeave.'-'.$ws->stationIDArrive?>
						seatsInfo[seatsInfo.length] = {'seatInfoID': '{{$seatInfoID}}', 'fullName': '', 'ID': '', 'typePass': ''};
					</script>
					<?php $trID = $ws->ticketID.$ws->tripID.$ws->stationIDLeave.$ws->stationIDArrive.'trID'?>
					<tr id="{{$trID}}">
						<td>
							<input id="{{$seatInfoID}}-name" type="text" class="form-control" name="" placeholder="Họ tên">
						</td>
						<td>
							<input id="{{$seatInfoID}}-ID" type="text" class="form-control" name="" placeholder="Số CMND/ Hộ chiếu/ Ngày tháng năm sinh trẻ em">
						</td>
						<td>
							<select id="{{$seatInfoID}}-select" onchange="selectChange(this)" class="form-control">
								@foreach($typePassenger as $tp)
									<option value="{{$tp->type_passenger_id}}">{{$tp->name}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<div class="seat-info">
								<div>{{$ws->trainName}} {{$ws->slName}}-{{$ws->saName}}</div>
								<div>{{$ws->dateLeave}}</div>
								<div>{{$ws->typeSeat}} toa {{$ws->carOrdinal}} cho {{$ws->seatOrdinal}}</div>
							</div>
						</td>
						<td>
							<p id="{{$seatInfoID}}-select-price">{{$ws->price}},000</p>
						</td>
						<td>
							<p id="{{$seatInfoID}}-select-discount">0</p>
						</td>
						<td>
							<p id="{{$seatInfoID}}-select-cost">0</p>
						</td>
						<td>
							<div class="trash-ticket" onclick="deleteTicket('{{$ws->ticketID}}', '{{$ws->tripID}}', '{{$ws->stationIDLeave}}', '{{$ws->stationIDArrive}}');">
								<?php $clockID = $ws->ticketID.$ws->tripID.$ws->stationIDLeave.$ws->stationIDArrive.'Clock'?>
								<p id="{{$clockID}}">{{$ws->ownTime}}</p>
								<img src="http://dsvn.vn/images/del30.png" width="32px" height="24px">
								<script type="text/javascript">
									newClock('{{$clockID}}', parseInt('{{$ws->ownTime}}'));
								</script>
							</div>
						</td>
					</tr>
					@endforeach
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
							<p id="total-cost" style="font-weight: bold;">1,100,000</p>
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
					<input id="cb-agree-term" type="checkbox" name="agree-term">
					<span>Tôi đã đọc kỹ và đồng ý tuân thủ tất cả các <a href="">quy định mua vé trực tuyến</a>, <a href="">các chương trình khuyến mại</a> của Tổng công ty đường sắt Việt Nam và chịu trách nhiệm về tính xác thực của các thông tin trên.</span>
				</div>
				<div class="col-md-12">
					<a style="float: right;" class="btn" onclick="onContinue();">Tiếp theo>></a>
					<a href="search" style="float: left;" class="btn"><< Quay lại</a>
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
	<script type="text/javascript">
		function onContinue(){
			var isEmpty = false;
			for(var i in seatsInfo){
				var si = seatsInfo[i];

				var eName = $('#'+si.seatInfoID+'-name');
				var eID = $('#'+si.seatInfoID+'-ID');
				var eTypePass = $('#'+si.seatInfoID+'-select');

				stopWarning(eName);
				if(eName.val().length==0){
					startWarning(eName);
					isEmpty = true;
				}else{
					si.fullName = eName.val();
				}
				stopWarning(eID);
				if(eID.val().length==0){
					startWarning(eID);
					isEmpty = true;
				}else{
					si.ID = eID.val();
				}
				si.typePass = eTypePass.val();
			}
			if (isEmpty){
				alert('Vui lòng điền đầy đủ thông tin!');
				return;
			}

			var payment = document.querySelector('input[name="payment-radio"]:checked').value;

			var agreeTerm = document.getElementById('cb-agree-term').checked;
			if(!agreeTerm){
				alert('Vui lòng đọc kỹ và đồng ý tuân thủ tất cả các quy định mua vé trực tuyến, các chương trình khuyến mại của Tổng công ty đường sắt Việt Nam và chịu trách nhiệm về tính xác thực của các thông tin trên.');
				return;
			}

			//{"seatsInfo":[{"seatInfoID":"13-1-1-5","fullName":"s","ID":"s","typePass":"HSSV"},{"seatInfoID":"14-1-1-5","fullName":"s","ID":"s","typePass":"NL"},{"seatInfoID":"15-1-1-5","fullName":"s","ID":"s","typePass":"TE"}],"payment":"1"}
			var requestData = {"seatsInfo": seatsInfo, "payment": payment};
			// var json = JSON.stringify(requestData);
			// console.log(json);
			updatePassengerInfo(requestData);
		}

		function updatePassengerInfo(requestData){
			$.post('updatePassengerInfo',{
				data: JSON.stringify(requestData)
			},function(data, status){
				if(status != 'success'){
					aler('Request update passenger information failed!');
				}
				console.log(data);
				var response = JSON.parse(data);
				switch(response.code){
					case '0':
						// postOwnTime24H();
						for(var i in requestData.seatsInfo){
							var seatInfo = requestData.seatsInfo[i];
							var ids = seatInfo.seatInfoID.split('-');
							var seatID = ids[0];
							var tripID = ids[1];
							var stationIDLeave = ids[2];
							var stationIDArrive = ids[3];

							postOwnTime24H(tripID, seatID, stationIDLeave, stationIDArrive);
						}
						window.location.href = 'verify-info?payType='+requestData.payment;
					break;
					default:
						alert(response.message);
				}
			});
		}

		function postOwnTime24H(tripID, seatID, SIL, SIA){
			$.post('postOwnTime24H',{
				tripID: tripID,
				seatID: seatID,
				stationIDLeave: SIL,
				stationIDArrive: SIA
			},function(data, status){

				if(status != 'success'){ alert('pick seat: failed!'); return;}
				
				var response = JSON.parse(data);
				if(response['code'] != '0'){
					
					return;
				}
				console.log(response.data.mes);
			});
		}

		function startWarning(e){
			e.css('border-color', 'red');
		}
		function stopWarning(e){
			e.css('border-color', '#ccc');
		}
	</script>
	<script type="text/javascript">

		var passengerDiscount = {};
		@foreach($typePassenger as $tp)
			passengerDiscount['{{$tp->type_passenger_id}}'] = {{$tp->discount}};
		@endforeach

		for(var i in seatsInfo){

			var seatInfo = seatsInfo[i];
			var e = document.getElementById(seatInfo.seatInfoID+'-select');
			selectChange(e);
		}	

		simTotalCost();

		function selectChange(e){

			var cost = parseInt($('#'+e.id+'-price').html()) - passengerDiscount[e.value];
			$('#'+e.id+'-discount').html(passengerDiscount[e.value]+',000');
			$('#'+e.id+'-cost').html(cost+',000');
			simTotalCost();
		}

		function simTotalCost(){
			var sum = 0;
			for(var i in seatsInfo){

				var seatInfo = seatsInfo[i];
				var costString = $('#'+seatInfo.seatInfoID+'-select-cost').html();
				if(costString === undefined) continue;

				var cost = parseInt(costString);
				sum+=cost;
			}
			$('#total-cost').html(sum+',000');
		}

		function deleteTicket(seatID, tripID, sIL, sIA){

			$.post('unpickSeat',{
				tripID: tripID,
				seatID: seatID,
				stationIDLeave: sIL,
				stationIDArrive: sIA
			}, function(data, status){
				var response = JSON.parse(data);
				if(response.code == 0){
					// var seatID = response.data.seatID;
					//Change seat layout
					
					var clockID = seatID+tripID+sIL+sIA+'Clock';
					var clock = clocks[clockID];
					clock.pause();

					var trID = seatID+tripID+sIL+sIA+'trID';
					$('#'+trID).remove();
					removeSeatInSeatsInfo(seatID+'-'+tripID+'-'+sIL+'-'+sIA);
					simTotalCost();
				}else{
					alert(response.message);
				}
			});
		}

		function removeSeatInSeatsInfo(seatInfoID){
			for(var i in seatsInfo){
				var seatInfo = seatsInfo[i];
				if(seatInfo.seatInfoID == seatInfoID){
					seatsInfo.splice(i, 1);	
				}
			}
			if(seatsInfo.length == 0) window.location.href = 'search';
		}
	</script>
</body>
</html>