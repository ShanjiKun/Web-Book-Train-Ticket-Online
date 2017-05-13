@extends('../master/master')
@section('title','Vé của tôi')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/booking-information/booking-information.css') }}">
	<script type="text/javascript" src="{{ asset('/js/booking-information/booking-information.js') }}"></script>
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
			margin-bottom: 15px;
			padding: 2px 10px;
		    background-color: #0686b7;
		    border: 1px solid #faf8f9;
		    box-shadow: 1px 1px 1px 1px #d7d7d7;
		    color: #fff;
		    text-decoration: none;
		    min-width: 40px;
		    font-size: 16px;
		}
		.btn1{
			/*margin-top: 10px;*/
			padding: 2px 10px;
		    background-color: #275f27;
		    border: 1px solid #faf8f9;
		    box-shadow: 1px 1px 1px 1px #d7d7d7;
		    color: #fff;
		    text-decoration: none;
		    min-width: 40px;
		    font-size: 14px;
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
	<div id="booking-information-page">
		<div class="container-fluid">

			<div class="head1">
				VÉ ĐÃ THANH TOÁN
			</div>
			<div class="tickets-information">
				<!-- <h6 style=" color: #e55a05; font-weight: 700;">Thông tin vé</h6> -->
				<table class="table">
					<tr style="background-color: #eee;">
						<th style="width: 16%">Mã vé</th>
						<th style="width: 16%">Họ tên</th>
						<th>Giấy tờ</th>
						<th style="width: 14%">Đối tượng</th>
						<th style="width: 16%">Thông tin chỗ</th>
						<th style="width: 10%">Giá vé</th>
						<th style="width: 9%">Tải vé</th>
					</tr>
				@foreach($ticketsPaid as $item)
					<tr>
						<td>{{$item->ticket_cart_id}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->card_date_id}}</td>
						<td>{{$item->type_passenger}}</td>
						<td>{{$item->ticket_information}}</td>
						<td>{{$item->cost}}</td>
						<td>
							<a class="btn" href="download-ticket?tcID={{$item->ticket_cart_id}}">Tải vé</a>
							<a class="btn1" onclick="refund({{$item->bill_id}}, {{$item->payment_type}})">Trả vé</a>
						</td>
					</tr>
				@endforeach
				</table>
			</div>



			<div class="head1">
				VÉ CHƯA THANH TOÁN
			</div>
			<div class="alert">
				<p class="alert-p2">
					Các vé trả sau quý khách vui lòng sử dụng mã thanh toán để thực hiện giao dịch thanh toán tại các đại lý thu tiền ủy quyền của Tổng công ty đường sắt Việt Nam.
				</p>
			</div>
			<div class="tickets-information">
				<!-- <h6 style=" color: #e55a05; font-weight: 700;">Thông tin vé</h6> -->
				<table class="table">
					<tr style="background-color: #eee;">
						<th style="width: 16%">Mã vé</th>
						<th style="width: 16%">Họ tên</th>
						<th>Giấy tờ</th>
						<th style="width: 16%">Thông tin chỗ</th>
						<th style="width: 14%">Giá vé</th>
						<th style="width: 9%">Mã thanh toán</th>
						<th style="width: 9%">Thanh toán</th>
					</tr>
				@foreach($ticketsUnpaid as $tup)
					<tr>
						<td>{{$tup->ticket_cart_id}}</td>
						<td>{{$tup->name}}</td>
						<td>{{$tup->card_date_id}}</td>
						<td>{{$tup->ticket_information}}</td>
						<td>{{$tup->cost}}</td>
						<td>{{$tup->bill_id}}</td>
						@if($tup->payment_type == 2)
							<td>Trả sau</td>
						@else
							<td>
								<a style="float: left; font-size: 10px;" class="btn" href="payment-online?billID={{$tup->bill_id}}" ;">Thanh toán</a>
							</td>
						@endif
					</tr>
				@endforeach	
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function refund(billID, payType) {

			if(payType == 2){
				alert('Vé mua với hình thức trả sau, quý khác vui lòng đến đến các đại lý để trả vé!');
				return;
			}

			var isConfirm = confirm('Bạn chắc chắn muốn trả vé?');
			if(!isConfirm) return;

			$.get('refund?billID='+billID, function(data, status){
				var res = JSON.parse(data);
				if(res.code != 0) alert(res.message);

				window.location.href = 'my-tickets';
			});
		}
	</script>
@stop