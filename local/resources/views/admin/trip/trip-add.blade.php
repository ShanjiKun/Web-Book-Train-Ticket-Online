@extends('admin.admin-master')

@section('title', 'Thêm Chuyên Tàu')

@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Chuyến Tàu</legend>
		<span class="form_label">Tàu:</span>
		<span class="form_item">
			<select name="sltTrain" class="select">
				@foreach($data as $value){
					<option value="{!! $value["train_id"]!!}">{!! $value["name"]!!}</option>
				}
				@endforeach
			</select>
		</span><br />
		<span class="form_label">Ga Đi:</span>
		<span class="form_item">
			<select name="sltStationLeave" class="select">
				@foreach($data1 as $value){
					<option value="{!! $value["station_id"]!!}">{!! $value["name"]!!}</option>
				}
				@endforeach
			</select>
		</span><br />
		<span class="form_label">Ga Đến:</span>
		<span class="form_item">
			<select name="sltStationArrive" class="select">
				@foreach($data1 as $value){
					<option value="{!! $value["station_id"]!!}">{!! $value["name"]!!}</option>
				}
				@endforeach
			</select>
		</span><br />
    	<span class="form_label">Ngày đi:</span>
    	<span class="form_item">
	    	<input type="text" style="width:292px" name="txtDateLeave" class="form-control input-datepicker select" id="date-leave" readonly="readonly" placeholder="Ngày đi">
	    	<img id="btn-date-leave" class="image-calendar" src="https://us.123rf.com/450wm/mamanamsai/mamanamsai1412/mamanamsai141200858/35039467-calendar-icon-on-blue-button.jpg" id="btn-date-leave">
    	</span><br/>
    	<span class="form_label">Giờ đi:</span>
    	<span class="form_item">
	    	<div class="input-timepicker">
	    		<input type="text" style="width:292px" name="txtTimeLeave" class="form-control select" id="time-leave" placeholder="Giờ đi">
	    	</div>
    	</span><br/>
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnTripAdd" value="Thêm Chuyến Tàu" class="button" />
		</span>
	</fieldset>
</form> 
<script type="text/javascript">
	//Add datepicker
	$('#date-leave').datepicker({
	    'format': 'yyyy-m-d',
	    'autoclose': true,
	    'startDate' : new Date()
	});

	$('#date-round').datepicker({
	    'format': 'yyyy-m-d',
	    'autoclose': true,
	    'startDate' : new Date()
	});

	$('#btn-date-leave').datepicker({
		'format': 'yyyy-m-d',
	    'autoclose': true,
	    'startDate' : new Date()
	}).on("changeDate", function(e){
		var dateYMD = e.date.getFullYear() + '-' + (e.date.getMonth() + 1) + '-' +  e.date.getDate();
		$('#date-leave').val(dateYMD);
	});

	$('#btn-date-round').datepicker({
		'format': 'yyyy-m-d',
	    'autoclose': true,
	    'startDate' : new Date()
	}).on("changeDate", function(e){
		var dateYMD = e.date.getFullYear() + '-' + (e.date.getMonth() + 1) + '-' +  e.date.getDate();
		$('#date-round').val(dateYMD);
	});

	//Add time picker
	$('#time-leave').timepicker({
		'step': 30,
		 'timeFormat': 'H:i'
	});

	$('#time-round').timepicker({
		'step': 30,
		 'timeFormat': 'H:i'
	});
</script>
@endsection