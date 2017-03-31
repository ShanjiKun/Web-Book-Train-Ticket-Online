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
					<div id="ticket-info-area">
						<div class="widget-header">
							<img src="http://dsvn.vn/images/widgetIcon.png">
							<p>Thông tin hành trình</p>
						</div>
						<div class="form">
							<form>
								<div class="form-group">
								    <p>Ga đi</p>
								    <input type="text" class="form-control station-dropdown" id="station-leave" placeholder="Ga đi">
								</div>
							  	<div class="form-group">
							    	<p>Ga đến</p>
							    	<input type="text" class="form-control station-dropdown" id="station-arrive" placeholder="Ga đến">
							 	</div>
							  	<div class="round-trip">
							  		<input type="radio" name="isRoundTrip" value="1" checked="checked">
							  		<span>Một chiều</span>
							  		<input type="radio" name="isRoundTrip" value="2">
							  		<span>Khứ hồi</span>
							  	</div>
							  	<div class="form-group">
							    	<p>Ngày đi</p>
							    	<input type="text" class="form-control input-datepicker" id="date-leave" readonly="readonly" placeholder="Ngày đi">
							    	<img class="image-calendar" src="https://us.123rf.com/450wm/mamanamsai/mamanamsai1412/mamanamsai141200858/35039467-calendar-icon-on-blue-button.jpg" id="btn-date-leave">
							    	<div class="input-timepicker">
							    		<input type="text" class="form-control" id="time-leave" placeholder="Giờ đi">
							    	</div>
							 	</div>
							 	<div class="form-group">
							    	<p>Ngày về</p>
							    	<input type="text" class="form-control input-datepicker control-disable"  id="date-round" placeholder="Ngày về">
							    	<img class="image-calendar control-disable" src="https://us.123rf.com/450wm/mamanamsai/mamanamsai1412/mamanamsai141200858/35039467-calendar-icon-on-blue-button.jpg" id="btn-date-round">
							    	<div class="input-timepicker">
							    		<input type="text" class="form-control control-disable" id="time-round" placeholder="Giờ về">
							    	</div>
							 	</div>
							  	<div class="form-group">
							  		<div id="search-btn" class="btn-1">Tìm kiếm</div>
							  	</div>
							</form>
						</div>
					</div> <!-- ticket-info-area -->
				</div>
				<div class="col-md-6">
					<div id="poster-area">
						<a href="http://www.vr.com.vn/cam-nang-di-tau.html" target="_blank"><img style="width: 100%;" src="http://dsvn.vn/images/banner-tet-2016.jpg">
						</a>
					</div>
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
								<div class="btn-1">Mua vé</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Station Dropdown -->
	<ul id="station-dropdown-content" class="dropdown-menu" style="display:none;" >
		<!-- Station Dropdown Content -->
	</ul>
	<script>
		sessionStorage.removeItem('tripsLeave');
		sessionStorage.removeItem('tripsArrive');
		sessionStorage.removeItem('tripInformation');
		var stations = JSON.parse('{{ $jsonStations }}'.replace(/&quot;/g,'"')); //key: station_id, value: station_name
	</script>
	<script type="text/javascript" src="{{ asset('/js/home/trip-information.js') }}"></script>
@stop