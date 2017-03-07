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
							    	<input type="text" class="form-control" id="NgayDi" placeholder="Ngày đi">
							    	<img src="http://dsvn.vn/images/widgetIcon.png" id="btn-ngay-di-DP">
							 	</div>
							 	<div class="form-group">
							    	<p>Ngày về</p>
							    	<input type="text" class="form-control datepicker" id="NgayVe" placeholder="Ngày về">
							 	</div>
							  <button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div id="center-area">
						
					</div>
				</div>
				<div class="col-md-3">
					<div id="right-area">
						<div class="widget-header">
							<img src="http://dsvn.vn/images/widgetIcon.png">
							<p>Giỏ vé</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	    // initialize input widgets first
	    
	    $('#NgayDi').datepicker({
	        'format': 'yyyy-m-d',
	        'autoclose': true
	    });
	    $('#NgayVe').datepicker({
	        'format': 'yyyy-m-d',
	        'autoclose': true
	    });
	    $('#btn-ngay-di-DP').click(function(){
	    	$('#NgayDi').show();
	    });
	</script>
@stop