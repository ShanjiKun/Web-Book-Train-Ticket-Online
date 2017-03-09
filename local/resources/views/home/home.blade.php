@extends('../master/master')
@section('title','Trang chủ')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/home/home.css') }}">
	<script type="text/javascript" src="{{ asset('/js/home/home.js') }}"></script>

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/pickmeup.css') }}" />
	<script type="text/javascript" src="{{ asset('/js/lib/pickmeup.min.js') }}"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/jquery.timepicker.css') }}" />
	<script type="text/javascript" src="{{ asset('/js/lib/jquery.timepicker.min.js') }}"></script>
	
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/bootstrap-datepicker.css') }}" />
	<script type="text/javascript" src="{{ asset('/js/lib/bootstrap-datepicker.js') }}"></script>
	
	<div id="home-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div id="left-area">
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
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div id="center-area">
						<a href="http://www.vr.com.vn/cam-nang-di-tau.html" target="_blank"><img style="width: 100%;" src="http://dsvn.vn/images/banner-tet-2016.jpg">
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div id="right-area">
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	    
	    //Add datepicker
	    $('#NgayDiDP').datepicker({
	        'format': 'd-m-yyyy',
	        'autoclose': true
	    });

	    $('#NgayVeDP').datepicker({
	        'format': 'd-m-yyyy',
	        'autoclose': true
	    });

	    $('#btn-ngay-di-dp').datepicker({
	    	'format': 'd-m-yyyy',
	        'autoclose': true
	    }).on("changeDate", function(e){
	    	var dateDMY = e.date.getDate() + '-' + (e.date.getMonth() + 1) + '-' +  e.date.getFullYear();
	    	$('#NgayDiDP').val(dateDMY);
	    });

	    $('#btn-ngay-ve-dp').datepicker({
	    	'format': 'd-m-yyyy',
	        'autoclose': true
	    }).on("changeDate", function(e){
	    	var dateDMY = e.date.getDate() + '-' + (e.date.getMonth() + 1) + '-' +  e.date.getFullYear();
	    	$('#NgayVeDP').val(dateDMY);
	    });

	    //Add time picker
	    $('#NgayDiTP').timepicker({
	    	'step': 30,
	    	 'timeFormat': 'H:i'
	    });

	    $('#NgayVeTP').timepicker({
	    	'step': 30,
	    	 'timeFormat': 'H:i'
	    });
	</script>
@stop