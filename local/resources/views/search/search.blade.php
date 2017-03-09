@extends('../master/master')
@section('title','Tìm vé')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/search/search.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/home/home.css') }}">
	<script type="text/javascript" src="{{ asset('/js/search/search.js') }}"></script>
	<div id="search-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
					<div class="search-main">
						<div class="top-label">
					  		<p style="display: inline; font-size: 16px; font-weight: bold;">Chiều đi:</p>
					  		<p style="display: inline; font-size: 14px;">ngày 01/01/2011 từ Sài Gòn đến Hà Nội</p>
					  	</div>
					  	<div class="pick-train">
							<div class="move-train-arrow-left ele-inline-block">
								
							</div> <!-- arrow -->
							<div class="train train-picked ele-inline-block">
								<div class="train-name">SE8</div>
								<table class="train-info">
									<tr>
										<td class="text-left">
											TG đi
										</td>
										<td class="text-right">
											11/03 06:00
										</td>
									</tr>
									<tr>
										<td class="text-left">
											TG đến
										</td>
										<td class="text-right">
											12/03 15:33
										</td>
									</tr>
									<tr>
										<td class="text-left">
											SL chỗ đặt
										</td>
										<td class="text-right">
											SL chỗ trống
										</td>
									</tr>
									<tr class="text-center">
										<td>
											0
										</td>
										<td>
											343
										</td>
									</tr>
								</table>
							</div> <!-- train-1 -->
							<div class="train train-normal ele-inline-block">
								<div class="train-name">SE8</div>
								<table class="train-info">
									<tr>
										<td class="text-left">
											TG đi
										</td>
										<td class="text-right">
											11/03 06:00
										</td>
									</tr>
									<tr>
										<td class="text-left">
											TG đến
										</td>
										<td class="text-right">
											12/03 15:33
										</td>
									</tr>
									<tr>
										<td class="text-left">
											SL chỗ đặt
										</td>
										<td class="text-right">
											SL chỗ trống
										</td>
									</tr>
									<tr class="text-center">
										<td>
											0
										</td>
										<td>
											343
										</td>
									</tr>
								</table>
							</div> <!-- train-2 -->
							<div class="train train-normal ele-inline-block">
								<div class="train-name">SE8</div>
								<table class="train-info">
									<tr>
										<td class="text-left">
											TG đi
										</td>
										<td class="text-right">
											11/03 06:00
										</td>
									</tr>
									<tr>
										<td class="text-left">
											TG đến
										</td>
										<td class="text-right">
											12/03 15:33
										</td>
									</tr>
									<tr>
										<td class="text-left">
											SL chỗ đặt
										</td>
										<td class="text-right">
											SL chỗ trống
										</td>
									</tr>
									<tr class="text-center">
										<td>
											0
										</td>
										<td>
											343
										</td>
									</tr>
								</table>
							</div> <!-- train-3 -->
							<div class="train train-normal ele-inline-block">
								<div class="train-name">SE8</div>
								<table class="train-info">
									<tr>
										<td class="text-left">
											TG đi
										</td>
										<td class="text-right">
											11/03 06:00
										</td>
									</tr>
									<tr>
										<td class="text-left">
											TG đến
										</td>
										<td class="text-right">
											12/03 15:33
										</td>
									</tr>
									<tr>
										<td class="text-left">
											SL chỗ đặt
										</td>
										<td class="text-right">
											SL chỗ trống
										</td>
									</tr>
									<tr class="text-center">
										<td>
											0
										</td>
										<td>
											343
										</td>
									</tr>
								</table>
							</div> <!-- train-4 -->
							<div class="train train-normal ele-inline-block">
								<div class="train-name">SE8</div>
								<table class="train-info">
									<tr>
										<td class="text-left">
											TG đi
										</td>
										<td class="text-right">
											11/03 06:00
										</td>
									</tr>
									<tr>
										<td class="text-left">
											TG đến
										</td>
										<td class="text-right">
											12/03 15:33
										</td>
									</tr>
									<tr>
										<td class="text-left">
											SL chỗ đặt
										</td>
										<td class="text-right">
											SL chỗ trống
										</td>
									</tr>
									<tr class="text-center">
										<td>
											0
										</td>
										<td>
											343
										</td>
									</tr>
								</table>
							</div> <!-- train-5 -->
							<div class="move-train-arrow-left ele-inline-block">
							</div>
					  	</div> <!-- pick-train -->
					  	<div class="pick-car">
					  		<div class="train-car">
								<img src="./images/tc-gray.png">
								<div class="car-label">1</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-green.png">
								<div class="car-label">10</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-orange.png">
								<div class="car-label">20</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-head.png">
								<div class="car-label">SE8</div>
							</div>
					  	</div> <!-- pick-car -->
					</div> <!-- search-main -->
				</div>
				<div class="col-md-3">
					<div id="num-ticket-area">
						<div class="widget-header">
							<img src="http://dsvn.vn/images/widgetIcon.png">
							<p>Giỏ vé</p>
						</div>
						<div class="ticket-manager">
							<div id="num-ticket">
								<p id="no-ticket">Chưa có vé</p>
							</div>
							<div class="buy-ticket">
								<a href="" class="btn-1">Mua vé</a>
							</div>
						</div>
					</div> <!-- num-ticket-area -->
					<div id="ticket-info-area">
						<div class="widget-header">
							<img src="http://dsvn.vn/images/widgetIcon.png">
							<p>Thông tin hành trình</p>
						</div>
						<div class="form">
							<form>
								<div class="form-group">
								    <p>Ga đi</p>
								    <input type="text" class="form-control" id="GaDi" placeholder="Ga đi">
								</div>
							  	<div class="form-group">
							    	<p>Ga đến</p>
							    	<input type="text" class="form-control" id="GaDen" placeholder="Ga đến">
							 	</div>
							  	<div class="is-khuhoi-group">
							  		<input type="radio" name="MotChieu">
							  		<span>Một chiều</span>
							  		<input type="radio" name="KhuHoi">
							  		<span>Khứ hồi</span>
							  	</div>
							  	<div class="form-group">
							    	<p>Ngày đi</p>
							    	<input type="text" class="form-control input-datepicker" id="NgayDiDP" placeholder="Ngày đi">
							    	<img class="image-calendar" src="https://us.123rf.com/450wm/mamanamsai/mamanamsai1412/mamanamsai141200858/35039467-calendar-icon-on-blue-button.jpg" id="btn-ngay-di-dp">
							    	<div class="input-timepicker">
							    		<input type="text" name="" class="form-control" id="NgayDiTP" placeholder="Giờ đi">
							    	</div>
							 	</div>
							 	<div class="form-group">
							    	<p>Ngày về</p>
							    	<input type="text" class="form-control input-datepicker" id="NgayVeDP" placeholder="Ngày về">
							    	<img class="image-calendar" src="https://us.123rf.com/450wm/mamanamsai/mamanamsai1412/mamanamsai141200858/35039467-calendar-icon-on-blue-button.jpg" id="btn-ngay-ve-dp">
							    	<div class="input-timepicker">
							    		<input type="text" name="" class="form-control" id="NgayVeTP" placeholder="Giờ về">
							    	</div>
							 	</div>
							  	<div class="form-group">
							  		<a href="" class="btn-1">Tìm kiếm</a>
							  	</div>
							</form>
						</div> <!-- form -->
					</div> <!-- left-area -->
				</div> <!-- col-md-3 -->
			</div> <!-- row -->
		</div> <!-- container-fluid -->
	</div>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		$( "div.train-normal" ).hover(
		  function() {
		    $( this ).css('background-image','url('+ './images/train-hover.png' +')');
		  }, function() {
		    $( this ).css('background-image','url('+ './images/train.png' +')');
		  }
		);

		$( "div.train-picked" ).hover(
		  function() {
		    $( this ).css('background-image','url('+ './images/train-picked-hover.png' +')');
		  }, function() {
		    $( this ).css('background-image','url('+ './images/train-picked.png' +')');
		  }
		);
	</script>
@stop