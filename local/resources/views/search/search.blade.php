@extends('../master/master')
@section('title','Tìm vé')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/search/search.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/home/home.css') }}">
	<script type="text/javascript" src="{{ asset('/js/search/search.js') }}"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/jquery.timepicker.css') }}" />
	<script type="text/javascript" src="{{ asset('/js/lib/jquery.timepicker.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/lib/bootstrap-datepicker.css') }}" />
	<script type="text/javascript" src="{{ asset('/js/lib/bootstrap-datepicker.js') }}"></script>

	<div id="search-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
					<div class="search-main">
						<div class="top-label">
					  		<p style="display: inline; font-size: 16px; font-weight: bold;">Chiều đi:</p>
					  		<p id="title-top-leave" style="display: inline; font-size: 14px;">ngày 01/01/2011 từ Sài Gòn đến Hà Nội</p>
					  	</div> <!-- top-label -->
					  	<div class="pick-train">
							<div class="move-train-arrow-left ele-inline-block">
								
							</div> <!-- arrow -->
							<div class="train train-picked ele-inline-block">
								<div class="train-name">SE8</div>
								<table class="train-info">
									<tr>
										<td class="text-left text-1">
											TG đi
										</td>
										<td class="text-right">
											11/03 06:00
										</td>
									</tr>
									<tr>
										<td class="text-left text-1">
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
										<td class="text-1">
											0
										</td>
										<td class="text-1">
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
					  		<div class="train-car An28L">
								<img src="./images/tc-gray.png">
								<div class="car-label">1</div>
							</div>
							<div class="train-car An28L">
								<img src="./images/tc-green.png">
								<div class="car-label">10</div>
							</div>
							<div class="train-car An28L">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car Bn42L">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car Bn42L">
								<img src="./images/tc-orange.png">
								<div class="car-label">20</div>
							</div>
							<div class="train-car A64L">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car A64L">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car B80L">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car B80">
								<img src="./images/tc-blue.png">
								<div class="car-label">30</div>
							</div>
							<div class="train-car">
								<img src="./images/tc-head.png">
								<div class="car-label">SE8</div>
							</div>
					  	</div> <!-- pick-car -->
					  	<div class="car-info">
					  		<div class="car-name">
					  			Toa số 1: Ngồi cứng
					  		</div>
					  		<div class="car-details">
					  			<div class="car-floor">
					  				<div class="container-seat">
					  					<div class="car-floor-full-height">
					  						<div class="bed-way full-width">
					  							
					  						</div>
					  						<div class="bed-way text-center full-width font-small">
					  							T3
					  						</div>
					  						<div class="bed-way text-center full-width font-small">
					  							T2
					  						</div>
					  						<div class="bed-way text-center full-width font-small">
					  							T1
					  						</div>
					  					</div> <!-- car-floor-full-height -->
					  					<div class="container-bed">
					  						<div class="bed-way full-width">
					  							<div class="col-1-8 font-8 text-center">Khoang 1</div>
					  							<div class="col-1-8 font-8 text-center">Khoang 2</div>
					  							<div class="col-1-8 font-8 text-center">Khoang 3</div>
					  							<div class="col-1-8 font-8 text-center">Khoang 4</div>
					  							<div class="col-1-8 font-8 text-center">Khoang 5</div>
					  							<div class="col-1-8 font-8 text-center">Khoang 6</div>
					  							<div class="col-1-8 font-8 text-center">Khoang 7</div>
					  							<div class="col-1-8 font-8 text-center">Khoang 8</div>
					  						</div>
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										1
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										2
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-gray">
					  										3
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-yellow">
					  										4
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										5
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-violet">
					  										6
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										7
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										8
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										9
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										10
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										11
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										12
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										13
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										14
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										15
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										16
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										17
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										18
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										19
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										20
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										21
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										22
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										23
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										24
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										25
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										26
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										27
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										28
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										29
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										30
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										31
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										32
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										33
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										34
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										35
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										36
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										37
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										38
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										39
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										40
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										41
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										42
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										43
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										44
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										45
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-orange">
					  										46
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-left">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-white">
					  										47
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-left -->
					  						</div> <!-- bed -->
					  						<div class="bed">
					  							<div class="bed-right">
					  								<div class="bed-outer">
					  									<div class="main-bed text-center sit-color-green">
					  										48
					  									</div>
					  									<div class="bed-illu"></div>
					  								</div>
					  							</div> <!-- bed-right -->
					  						</div> <!-- bed -->
					  						<div class="car-floor-full-height"></div>
					  					</div> <!-- container-bed -->
					  				</div> <!-- container-seat -->
					  			</div> <!-- car-floor -->
					  		</div> <!-- car-details -->
					  	</div> <!-- car-info -->
					  	<div class="note">
					  		<div class="note-car-container">
					  			<div class="note-car">
					  				<div class="note-car-padding">
					  					<div class="note-car-img car-enable-ticket">

						  				</div>
						  				<div class="note-car-text">
						  					Toa còn vé
						  				</div>
					  				</div>
					  			</div> <!-- note-car -->
					  			<div class="note-car">
					  				<div class="note-car-padding">
					  					<div class="note-car-img car-disable-ticket">

						  				</div>
						  				<div class="note-car-text">
						  					Toa chưa bán
						  				</div>
					  				</div>
					  			</div> <!-- note-car -->
					  			<div class="note-car">
					  				<div class="note-car-padding">
					  					<div class="note-car-img car-current-ticket">

						  				</div>
						  				<div class="note-car-text">
						  					Toa hiện tại
						  				</div>
					  				</div>
					  			</div> <!-- note-car -->
					  			<div class="note-car">
					  				<div class="note-car-padding">
					  					<div class="note-car-img car-full-ticket">

						  				</div>
						  				<div class="note-car-text">
						  					Toa hết vé
						  				</div>
					  				</div>
					  			</div> <!-- note-car -->
					  		</div> <!-- note-car-container -->
					  		<div class="note-seat-container">
					  			<div class="note-seat-symbol">
					  				<div class="note-seat-symbol-block">
					  					<div class="note-seat">
					  						<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-orange">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-orange">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="note-seat-text">
												Chỗ chưa khả dụng (*)
						  					</div>
					  					</div> <!-- note-seat -->
					  					<div class="note-seat">
					  						<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-yellow">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-yellow">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="note-seat-text">
												Chỗ đang giao dịch
						  					</div>
					  					</div> <!-- note-seat -->
					  					<div class="note-seat">
					  						<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-white">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-white">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="note-seat-text">
												Chỗ trống
						  					</div>
					  					</div> <!-- note-seat -->
					  				</div> <!-- note-seat-symbol-block -->
					  				<div class="note-seat-symbol-block">
					  					<div class="note-seat">
					  						<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-gray">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-gray">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="note-seat-text">
												Chỗ chưa bán
						  					</div>
					  					</div> <!-- note-seat -->
					  					<div class="note-seat">
					  						<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-violet">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-violet">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="note-seat-text">
												Chỗ chặng dài hơn
						  					</div>
					  					</div> <!-- note-seat -->
					  					<div class="note-seat">
					  						<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-green">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="seat seat-note">
						  						<div class="sit-side">
						  							
						  						</div>
						  						<div class="sit sit-left">
						  							<div class="sit-bg sit-color-green">
						  								<div class="sit-num"></div>
						  							</div>
						  						</div>
						  					</div> <!-- seat1 -->
						  					<div class="note-seat-text">
												Chỗ đang chọn
						  					</div>
					  					</div> <!-- note-seat -->
					  				</div> <!-- note-seat-symbol-block -->
					  			</div> <!-- note-seat-symbol -->
					  			<div class="note-seat-explain">
					  				<div class="note-seat-explain-header">
					  					(*) Chỗ chưa khả dụng là một trong hai trường hợp sau:
					  				</div>
					  				<div class="note-seat-explain-main">
					  					- Là chỗ đã bán nếu ngày đi tàu trong giai đoạn được công bố bán vé (hiện nay là tổ chức bán vé cho ngày đi tàu đến 27/04/2017).
					  				</div>
					  				<div class="note-seat-explain-main">
					  					- Là chỗ chưa có lịch chạy tàu nếu ngày đi tàu nằm ngoài giai đoạn được công bố bán vé (hiện nay là ngày đi tàu từ 28/04/2017 trở đi).
					  				</div>
					  			</div> <!-- note-seat-explain -->
					  		</div> <!-- note-seat-container -->
					  	</div> <!-- note -->
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
				</div> <!-- col-md-3 -->
			</div> <!-- row -->
		</div> <!-- container-fluid -->
	</div>

	<!-- small-pop-up -->
	<div id="small-pop-up">
	    <div id="small-pop-up-body">
	    	Ngồi mềm điều hòa (A64L)
	    </div>
	    <div id="small-pop-up-triangle">
	    	
	    </div>
    </div>
    <!-- medium-pop-up -->
	<div id="medium-pop-up">
		<div id="medium-pop-up-body">
			<div id="medium-pop-up-header">
    			Chỗ trống(Mã số vé: 12345)
	    	</div>
	    	<div id="medium-pop-up-content">
	    		Giá: 123,000 VNĐ
	    	</div>
		</div>
	    <div id="medium-pop-up-triangle">
	    	
	    </div>
    </div>
    <!-- Station Dropdown -->
    <ul id="station-dropdown-content" class="dropdown-menu" style="display:none;" >
		<!-- Station Dropdown Content -->
	</ul>
    <script>
		var stations = JSON.parse('{{ $jsonStations }}'.replace(/&quot;/g,'"')); //key: station_id, value: station_name
	</script>
	<script type="text/javascript" src="{{ asset('/js/home/trip-information.js') }}"></script>
	<script type="text/javascript">
		//Global variable
		var currentTripID;
		var currentCarID;
		var currentCars = {}; //key: car-1, value: ["type":"B80", "status":"1"]


		//
		$(document).ready(function(){
			//tripsLeave: [{'trip_id':1}, {'trip_id':2}]
			//Trips were sorted with date leave
			var tripsLeave = sessionStorage.tripsLeave;
			if(!tripsLeave){
				window.location.replace("/Web-Book-Train-Ticket-Online/");
				return;
			}

			//tripInformation: {"stationLeave":"SG",
    		// 	"stationArrive":"DN",
    		// 	"indexOfRound":1,
    		// 	"dateLeave":"2017-03-22",
    		// 	"dateRound":"2017-03-25",
    		// 	"timeLeave":"00:00",
    		// 	"timeRound":"00:00"
    		// }
			var tripInformation = JSON.parse(sessionStorage.tripInformation);
			showTripInformation(tripInformation);
			showTrips(tripsLeave, tripInformation, function(){
				var dateOfUserString = tripInformation['dateLeave'] + ' ' + tripInformation['timeLeave'];
				getTrainInformation(tripsLeave, getStationID(tripInformation['stationLeave']), getStationID(tripInformation['stationArrive']), dateOfUserString);
			});
		});
		function showTripInformation(tripInformation){
			$('#station-leave').val(tripInformation['stationLeave']);
			$('#station-arrive').val(tripInformation['stationArrive']);
			$('input:radio[name="isRoundTrip"]').filter('[value="'+tripInformation['indexOfRound']+'"]').attr('checked', true);
			$('#date-leave').val(tripInformation['dateLeave']);
			$('#time-leave').val(tripInformation['timeLeave']);
			if(tripInformation['indexOfRound']=='2'){
				$('#date-round').val(tripInformation['dateRound']);
				$('#time-round').val(tripInformation['timeRound']);
				enableDateTimeRoundPicker();
			}

			$('#title-top-leave').html('ngày '+tripInformation['dateLeave']+' từ '+tripInformation['stationLeave']+' đến '+tripInformation['stationArrive']);
		}

		function showTrips(jsonTripsLeave, tripInformation, success){
			var tripsLeave = JSON.parse(jsonTripsLeave);
			var trains = '<div class="move-train-arrow-left ele-inline-block"> </div> <!-- arrow -->';
			for( i = 0; i < tripsLeave.length; i++){
				var tripID = 'trip-'+tripsLeave[i].trip_id;
				var trainNameID = 'trip-'+tripsLeave[i].trip_id+'-train-name';
				var timeLeaveID = 'trip-'+tripsLeave[i].trip_id+'-time-leave';
				var timeArriveID = 'trip-'+tripsLeave[i].trip_id+'-time-arrive';
				var availableSeatID = 'trip-'+tripsLeave[i].trip_id+'-avaliable-seat';
				var unavailableSeatID = 'trip-'+tripsLeave[i].trip_id+'-unavailable-seat';
				trains += '<div id="'+ tripID +'" class="train train-normal ele-inline-block")>'+
								'<div id="'+trainNameID+'" class="train-name">SE8</div>'+
								'<table class="train-info">'+
									'<tr>'+
										'<td class="text-left text-1">'+
											'TG đi'+
										'</td>'+
										'<td id="'+timeLeaveID+'" class="text-right">'+
											'11/03 06:00'+
										'</td>'+
									'</tr>'+
									'<tr>'+
										'<td class="text-left text-1">'+
											'TG đến'+
										'</td>'+
										'<td id="'+timeArriveID+'" class="text-right">'+
											'12/03 15:33'+
										'</td>'+
									'</tr>'+
									'<tr>'+
										'<td class="text-left">'+
											'SL chỗ đặt'+
										'</td>'+
										'<td class="text-right">'+
											'SL chỗ trống'+
										'</td>'+
									'</tr>'+
									'<tr class="text-center">'+
										'<td id="'+unavailableSeatID+'" class="text-1">'+
											'0'+
										'</td>'+
										'<td id="'+availableSeatID+'" class="text-1">'+
											'343'+
										'</td>'+
									'</tr>'+
								'</table>'+
							'</div> ';
			}
			trains += '<div class="move-train-arrow-left ele-inline-block"> </div> <!-- arrow -->';

			$('.pick-train').html(trains);
			refreshTrainUI();

			for(i = 0; i < tripsLeave.length; i++){
				var tripID = 'trip-'+tripsLeave[i].trip_id;
				addTrainClick(tripID);
			}
			success();
		}
		function getTrainInformation(tripsLeave, stationIDLeave, stationIDArrive, dateOfUserString){
			getTrainName(tripsLeave, stationIDLeave, stationIDArrive, dateOfUserString, function(){
				getTrainSeat(tripsLeave, stationIDLeave, stationIDArrive, dateOfUserString, function(){
					getTrainTime(tripsLeave, stationIDLeave, stationIDArrive, dateOfUserString, function(_tripID){

						//Set first train picked
						var tripID = 'trip-'+ _tripID;
						$('#'+tripID).removeClass('train-normal');
						$('#'+tripID).addClass('train-picked');
						currentTripID = tripID;
						getCarInFormation(_tripID, stationIDLeave, stationIDArrive);
						refreshTrainUI();
					});
				});
			});
		}
		function getTrainName(tripsLeave, stationIDLeave, stationIDArrive, dateOfUserString, success){
			//need: Which train?, When leave?, When arrive?, How many unavailable seat?, how many available seat?
			//Get train name
			//Input: [{"trip_id":"1"}, {"trip_id":"2"}, {"trip_id":"3"}, {"trip_id":"4"}] trips_id
        	//Output: { "code":"0", "message":"success", "data":[{"trip_id":"1", "train_name":"SE1"}, {"trip_id":"2", "train_name":"SE2"}]} train_name base on trip_id
			$.post('get-train-name-via-trip', {
				trips: tripsLeave
			}, function(data, status){
				// alert('Train name: ' + data);
				var response = JSON.parse(data);
				if(response['code']=='0'){
					var trainsName = response['data'];
					for( i = 0; i < trainsName.length; i++){
						var trainNameID = 'trip-'+trainsName[i].trip_id+'-train-name';;
						var trainName = trainsName[i].train_name;
						$('#'+trainNameID).html(trainName);
					}
					success()
				}else{
					alert(response['message']);
				}
			});
		}
		function getTrainSeat(tripsLeave, stationIDLeave, stationIDArrive, dateOfUserString, success){
			//Get unavailable seat, available seat from station leave to station arrive
			//Input: 'stationIDLeave': '1', 'stationIDArrive': '3', "trips":[{"trip_id":"1"}, {"trip_id":"2"}]
			//Output: { "code":"0", "message":"success", "data":[{'trip_id':'1', 'unavailableSeat':'12', 'availableSeat':'60'}]}
			$.post('get-number-seat',{
				stationIDLeave: stationIDLeave,
				stationIDArrive: stationIDArrive,
				trips: tripsLeave
			},function( data, status){
				// alert('Available seat: ' + data);
				var response = JSON.parse(data);
				if(response['code']=='0'){
					var seats = response['data'];
					for(i = 0; i < seats.length; i++){
						var availableSeatID = 'trip-'+seats[i].trip_id+'-avaliable-seat';
						var unavailableSeatID = 'trip-'+seats[i].trip_id+'-unavailable-seat';
						var availableSeat = seats[i].availableSeat;
						var unavailableSeat = seats[i].unavailableSeat;
						$('#'+availableSeatID).html(availableSeat);
						$('#'+unavailableSeatID).html(unavailableSeat);
					}
					success();
				}else{
					alert(response['message']);
				}
			});
		}
		function getTrainTime(tripsLeave, stationIDLeave, stationIDArrive, dateOfUserString, success){
			//Get time leave, time arrive
			//Input: 'stationIDLeave': '1', 'stationIDArrive': '3', "trips":[{"trip_id":"1"}, {"trip_id":"2"}]
			//Output: { "code":"0", "message":"success", "data":[{'trip_id':'1', 'timeLeave':'1490162400', 'timeArrive':'1490162400'}]}
			//Sored date leave
			$.post('get-train-time-via-station',{
				stationIDLeave: stationIDLeave,
				stationIDArrive: stationIDArrive,
				trips: tripsLeave
			},function(data, status){

				var dateOfUser = new Date(dateOfUserString);

				// alert('Train time: ' + data);
				var response = JSON.parse(data);
				if(response['code']=='0'){
					var trainsTime = response['data'];

					var indexTrainChecked = 0;
					for( i = 0; i < trainsTime.length; i++){
						var timeLeaveID = 'trip-'+trainsTime[i].trip_id+'-time-leave';
						var timeArriveID = 'trip-'+trainsTime[i].trip_id+'-time-arrive';
						var timeStampLeave = trainsTime[i].timeLeave;
						var timeStampArrive = trainsTime[i].timeArrive;
						var dateLeave = formatTimeStampToDMHM(timeStampLeave);
						var dateArrive = formatTimeStampToDMHM(timeStampArrive);
						$('#'+timeLeaveID).html(dateLeave);
						$('#'+timeArriveID).html(dateArrive);
						dateOfTrain = new Date(timeStampLeave*1000);
						if(dateOfUser >= dateOfTrain){
							indexTrainChecked = i;
						}
					}
					success(trainsTime[indexTrainChecked].trip_id);
				}else{
					alert(response['message']);
				}
			});
		}
		function getCarInFormation(tripID, stationIDLeave, stationIDArrive){
			//Need: carID, car type
			//Input: tripID: 1
			//Output: { "code":"0", "message":"success", "data":[{"car_id":"1", "type":"B80", "status":"0"}, {"car_id":"2", "type":"B80L", "status":"1"}]}
			//Car was sorted DESC by num_seat
			//Car status
	        //0: available
	        //1: unavailable
	        //2: full seat
			$.post('get-cars',{
				tripID: tripID,
				stationIDLeave: stationIDLeave,
				stationIDArrive: stationIDArrive
			},function(data, status){
				// alert('Get cars: ' + data);
				var response = JSON.parse(data);
				if(response['code']==0){
					var cars = response['data'];
					var htmlCars = '';
					for(i = cars.length-1; i >= 0 ; i--){
						var carID = 'car-'+cars[i].car_id;
						var type = cars[i].type;
						var status = cars[i].status;
						var image = getCarImage(status);
						currentCars[carID] = {"type": type, "status": status};

						htmlCars += '<div id="'+carID+'" class="train-car '+type+'">'+
								'<img src="'+image+'">'+
								'<div class="car-label">'+(i+1)+'</div>'+
							'</div>';
					}
					var trainNameID = 'trip-'+tripID+'-train-name';
					var trainName = $('#'+trainNameID).html();
					htmlCars += '<div class="train-car">'+
								'<img src="./images/tc-head.png">'+
								'<div class="car-label">'+trainName+'</div>'+
							'</div>';
					$('.pick-car').html(htmlCars);
					var defaultCarID = 'car-'+cars[0].car_id;
					onCarTapped(defaultCarID);
					refreshCarUI();
					for(i =0; i < cars.length; i++){
						var carID = 'car-'+cars[i].car_id;
						addCarClick(carID);
					}
				}else{
					alert(response['message']);
				}
			});
		}
		function getCarImage(carStatus){
			switch(carStatus){
				case '0':
					return './images/tc-blue.png';
				case '1':
					return './images/tc-gray.png';
				case '2':
					return './images/tc-orange.png';
				default:
					return './images/tc-green.png';
			}
		}
		//Hanlde seat
		function handleSeat(carID){
			//CarID car-1
			//RealID 1
			getSeat(carID, null);
		}
		function getSeat(carID, carType, success){
			//Need: ticket_id, ordinal ticket on train
			//Input: carID
			//Output: { "code":"0", "message":"success", "data":[{"ticket_id":"1", "ordinal":"1"}, {"ticket_id":"2", "ordinal":"2"}]}
			//Data sorted by ordinal ASC
			var realID = carID.split('-')[1];
			$.post('get-seat',{
				carID: realID
			},function(data, status){
				alert('Get seat: ' + data);

				var response = JSON.parse(data);
				if(response['code']=='0'){
					// alert(response['data']);
					showSeat(currentCars[carID].type, response['data']);
				}else{
					alert(response['message']);
				}

				if(success) success();
			});
		}
		function showSeat(type, seats){
			var html;
			switch (type){
				case 'B80':
					if(seats.length!=80){
						alert('B80 must enough 80 seats');
						break;
					}
					html = show80Type(seats);
					break;
				case 'B80L':

					break;
				case 'A64L':

					break;
				case 'Bn42L':

					break;
				case 'An28L':

					break;
				default:
				alert('Can not find seat type: '+type);
			}
			$('.car-floor').html(html);

			function show80Type(seats){
				var html = '<div class="container-seat">';
				for(i = 0; i < 40; i++){
					var seatID = 'seat-'+seats[i].ticket_id;
					var ordinal = seats[i].ordinal;
					if(i%2==0){
						html += '<div id="'+seatID+'" onclick="onSeatTapped(this)" class="seat seat-80">'+
									'<div class="sit-side">'+
										
									'</div>'+
									'<div class="sit sit-left">'+
										'<div class="sit-bg sit-color-orange">'+
											'<div class="sit-num">'+ordinal+'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
					}else{
						html += '<div id="'+seatID+'" onclick="onSeatTapped(this)" class="seat seat-80">'+
									'<div class="sit sit-right">'+
										'<div class="sit-bg sit-color-orange">'+
											'<div class="sit-num">'+ordinal+'</div>'+
										'</div>'+
									'</div>'+
									'<div class="sit-side">'+
										
									'</div>'+
								'</div>';
					}
				}

				html += '<div class="car-way"></div>';

				for(i = 40; i < 80; i++){
					var seatID = 'seat-'+seats[i].ticket_id;
					var ordinal = seats[i].ordinal;
					if(i%2==0){
						html += '<div id="'+seatID+'" onclick="onSeatTapped(this)" class="seat seat-80">'+
									'<div class="sit-side">'+
										
									'</div>'+
									'<div class="sit sit-left">'+
										'<div class="sit-bg sit-color-orange">'+
											'<div class="sit-num">'+ordinal+'</div>'+
										'</div>'+
									'</div>'+
								'</div>';
					}else{
						html += '<div id="'+seatID+'" onclick="onSeatTapped(this)" class="seat seat-80">'+
									'<div class="sit sit-right">'+
										'<div class="sit-bg sit-color-orange">'+
											'<div class="sit-num">'+ordinal+'</div>'+
										'</div>'+
									'</div>'+
									'<div class="sit-side">'+
										
									'</div>'+
								'</div>';
					}
				}
				html += '</div>';
				return html;
			}
			function show80LType(seats){
				
			}
			function showA64L(seats){

			}
			function showBn42L(seats){

			}
			function showAn28L(seats){
				
			}
		}
		//Handle UI
		function changeTrainUI(tripID){

			$('#'+currentTripID).removeClass('train-picked');
			$('#'+currentTripID).addClass('train-normal');
			$('#'+currentTripID).css('background-image','url('+ './images/train.png' +')');

			$('#'+tripID).removeClass('train-normal');
			$('#'+tripID).addClass('train-picked');
			$('#'+tripID).css('background-image','url('+ './images/train-picked-hover.png' +')');

			refreshTrainUI();
		}
		function changeCarUI(carID){
			if(currentCarID){
				var image = getCarImage(currentCars[currentCarID].status);
				$('#'+currentCarID+' img').attr('src', image);
			}
			var image = getCarImage('3');
			$('#'+carID+' img').attr('src', image);
			currentCarID = carID;
		}
		function refreshTrainUI(){
			$( ".train-normal" ).hover(
			  function() {
			    $( this ).css('background-image','url('+ './images/train-hover.png' +')');
			  }, function() {
			    $( this ).css('background-image','url('+ './images/train.png' +')');
			  }
			);

			$( ".train-picked" ).hover(
			  function() {
			    $( this ).css('background-image','url('+ './images/train-picked-hover.png' +')');
			  }, function() {
			    $( this ).css('background-image','url('+ './images/train-picked.png' +')');
			  }
			);
		}
		function refreshCarUI(){
			//small popup
			$('.B80').hover( function(){
				$('#small-pop-up-body').html("Ngồi cứng (B80)");
				showSmallPopup($(this), $('#small-pop-up'), $('#small-pop-up-triangle'));
			}, function(){
				hideSmallPopup($('#small-pop-up'));
			});
			$('.B80L').hover( function(){
				$('#small-pop-up-body').html("Ngồi cứng điều hòa (B80L)");
				showSmallPopup($(this), $('#small-pop-up'), $('#small-pop-up-triangle'));
			}, function(){
				hideSmallPopup($('#small-pop-up'));
			});
			$('.A64L').hover( function(){
				$('#small-pop-up-body').html("Ngồi mềm điều hòa (A64L)");
				showSmallPopup($(this), $('#small-pop-up'), $('#small-pop-up-triangle'));
			}, function(){
				hideSmallPopup($('#small-pop-up'));
			});
			$('.Bn42L').hover( function(){
				$('#small-pop-up-body').html("Nằm cứng điều hòa (Bn42L)");
				showSmallPopup($(this), $('#small-pop-up'), $('#small-pop-up-triangle'));
			}, function(){
				hideSmallPopup($('#small-pop-up'));
			});
			$('.An28L').hover( function(){
				$('#small-pop-up-body').html("Nằm mềm điều hòa (An28L)");
				showSmallPopup($(this), $('#small-pop-up'), $('#small-pop-up-triangle'));
			}, function(){
				hideSmallPopup($('#small-pop-up'));
			});
		}
		//Action click
		function addTrainClick(tripID){
			$('#'+tripID).click(function(){
				onTrainTapped($(this).attr('id'));
			});
		}
		function onTrainTapped(tripID){
			//tripID is trip-1
			//realID is 1
			var realID = tripID.split('-')[1];
			changeTrainUI(tripID);
			currentTripID = tripID;
			getCarInFormation(tripID.split('-')[1], getStationIDLeave(), getStationIDArrive());
		}
		function addCarClick(carID){
			$('#'+carID).click(function(){
				onCarTapped(carID);
			});
		}
		function onCarTapped(carID){
			//carID is car-1
			//realID is 1

			changeCarUI(carID);
			handleSeat(carID);
		}
		function onSeatTapped(e){
			alert(e.id);
		}
		//Utils
		function formatTimeStampToDMHM(timeStamp){
			var date = new Date(timeStamp*1000);
			return ("0" + date.getDate()).slice(-2)+'/'
									+("0" + date.getMonth()).slice(-2)+' '
									+("0" + date.getHours()).slice(-2)+':'
									+("0" + date.getMinutes()).slice(-2);
		}
		function getStationIDLeave(){
			var tripInformation = JSON.parse(sessionStorage.tripInformation);
			return getStationID(tripInformation['stationLeave'])
		}
		function getStationIDArrive(){
			var tripInformation = JSON.parse(sessionStorage.tripInformation);
			return getStationID(tripInformation['stationArrive'])
		}
	</script>
	<script type="text/javascript">
		//Pop-up handle
		//Medium popup
		$('.sit-color-white').hover(function(){
			$('#medium-pop-up-header').html("Chỗ trống(Mã số vé: 12345)");
			$('#medium-pop-up-header').css('color', '#3d86b1');
			$('#medium-pop-up-content').html("Giá: 123,000 VNĐ");
			showSmallPopup($(this), $('#medium-pop-up'), $('#medium-pop-up-triangle'));
		},function(){
			hideSmallPopup($('#medium-pop-up'));
		});
		$('.sit-color-green').hover(function(){
			$('#medium-pop-up-header').html("Trong giỏ vé(Thời gian giữ vé: 10 phút)(Mã số vé: 12345)");
			$('#medium-pop-up-header').css('color', '#3d86b1');
			$('#medium-pop-up-content').html("Giá: 123,000 VNĐ");
			showSmallPopup($(this), $('#medium-pop-up'), $('#medium-pop-up-triangle'));
		},function(){
			hideSmallPopup($('#medium-pop-up'));
		});
		$('.sit-color-yellow').hover(function(){
			$('#medium-pop-up-header').html("Đang GD(Thời gian giữ vé: 4 phút)(Mã số vé: 12345)");
			$('#medium-pop-up-header').css('color', '#fec306');
			$('#medium-pop-up-content').html("Giá: 123,000 VNĐ");
			showSmallPopup($(this), $('#medium-pop-up'), $('#medium-pop-up-triangle'));
		},function(){
			hideSmallPopup($('#medium-pop-up'));
		});
		$('.sit-color-orange').hover(function(){
			$('#medium-pop-up-header').html("Chưa khả dụng");
			$('#medium-pop-up-header').css('color', '#df5327');
			$('#medium-pop-up-content').html("Chỗ chưa khả dụng");
			showSmallPopup($(this), $('#medium-pop-up'), $('#medium-pop-up-triangle'));
		},function(){
			hideSmallPopup($('#medium-pop-up'));
		});
		$('.sit-color-gray').hover(function(){
			$('#medium-pop-up-header').html("Không bán(Mã số vé: 12345)");
			$('#medium-pop-up-header').css('color', '#3d86b1');
			$('#medium-pop-up-content').html("Bán vé viết tay");
			showSmallPopup($(this), $('#medium-pop-up'), $('#medium-pop-up-triangle'));
		},function(){
			hideSmallPopup($('#medium-pop-up'));
		});
		$('.sit-color-violet').hover(function(){
			$('#medium-pop-up-header').html("Chỗ chặn dài hơn là sao nhỉ ???");
			$('#medium-pop-up-header').css('color', '#3d86b1');
			$('#medium-pop-up-content').html("Làm sao??? AAAAAA");
			showSmallPopup($(this), $('#medium-pop-up'), $('#medium-pop-up-triangle'));
		},function(){
			hideSmallPopup($('#medium-pop-up'));
		});
		//Handle popup
		function showSmallPopup(e, popup, popup_triangle) {
		  	var x = e.offset().left - (popup.width() - e.width())/2;
		  	var y = e.offset().top -  popup.outerHeight();
		    popup.show()
		    .css('top',  y)
		    .css('left', x)
		    .appendTo('body');

		    //Update triangle position
		    var marginOfTriangle = (popup.width() - popup_triangle.width())/2;
		    popup_triangle.css('margin-left', marginOfTriangle);
		}

		function hideSmallPopup(popup){
	  		popup.hide();
		}
	</script>
@stop