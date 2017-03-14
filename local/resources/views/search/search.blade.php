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
					  	</div> <!-- top-label -->
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

					  					<!-- seats 1 -->

					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">1</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat1 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">2</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat2 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">3</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat3 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">4</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat4 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-violet">
					  								<div class="sit-num">5</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat5 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">6</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat6 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">7</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat7 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">8</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat8 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">9</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat9 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-gray">
					  								<div class="sit-num">10</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat10 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">11</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat11 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">12</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat12 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-yellow">
					  								<div class="sit-num">13</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat13 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">14</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat14 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">15</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat15 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">16</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat16 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">17</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat17 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-green">
					  								<div class="sit-num">18</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat18 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">19</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat19 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">20</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat20 -->
					  					
					  					<!-- seats 2 -->

					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">21</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat1 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">22</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat2 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">23</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat3 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">24</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat4 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-violet">
					  								<div class="sit-num">25</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat5 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">26</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat6 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">27</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat7 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">28</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat8 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">29</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat9 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-gray">
					  								<div class="sit-num">30</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat10 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">31</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat11 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">32</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat12 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-yellow">
					  								<div class="sit-num">33</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat13 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">34</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat14 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">35</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat15 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">36</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat16 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">37</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat17 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-green">
					  								<div class="sit-num">38</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat18 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">39</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat19 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">40</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat20 -->

					  					<!-- car way -->

					  					<div class="car-way"></div>

					  					<!-- seats 3 -->

					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">41</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat1 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">42</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat2 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">43</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat3 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">44</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat4 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-violet">
					  								<div class="sit-num">45</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat5 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">46</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat6 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">47</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat7 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">48</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat8 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">49</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat9 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-gray">
					  								<div class="sit-num">50</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat10 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">51</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat11 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">52</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat12 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-yellow">
					  								<div class="sit-num">53</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat13 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">54</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat14 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">55</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat15 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">56</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat16 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">57</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat17 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-green">
					  								<div class="sit-num">58</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat18 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">59</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat19 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">60</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat20 -->

					  					<!-- seats 4 -->

					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">61</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat1 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">62</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat2 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">63</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat3 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">64</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat4 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-violet">
					  								<div class="sit-num">65</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat5 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">66</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat6 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">67</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat7 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">68</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat8 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">69</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat9 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-gray">
					  								<div class="sit-num">70</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat10 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-orange">
					  								<div class="sit-num">71</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat11 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">72</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat12 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-yellow">
					  								<div class="sit-num">73</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat13 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">74</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat14 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">75</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat15 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">76</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat16 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">77</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat17 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-green">
					  								<div class="sit-num">78</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat18 -->
					  					<div class="seat">
					  						<div class="sit-side">
					  							
					  						</div>
					  						<div class="sit sit-left">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">79</div>
					  							</div>
					  						</div>
					  					</div> <!-- seat19 -->
					  					<div class="seat">
					  						<div class="sit sit-right">
					  							<div class="sit-bg sit-color-white">
					  								<div class="sit-num">80</div>
					  							</div>
					  						</div>
					  						<div class="sit-side">
					  							
					  						</div>
					  					</div> <!-- seat20 -->
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

		//Pop-up handle
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