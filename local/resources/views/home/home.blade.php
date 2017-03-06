@extends('../master/master')
@section('title','Trang chủ')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/home/home.css') }}">
	<script type="text/javascript" src="{{ asset('/js/home/home.js') }}"></script>
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
							    <label for="GaDi">Ga đi</label>
							    <input type="text" class="form-control" id="GaDi" placeholder="Ga đi">
							  </div>
							  <div class="form-group">
							    <label for="GaDen">Ga đến</label>
							    <input type="text" class="form-control" id="GaDen" placeholder="Ga đến">
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
@stop