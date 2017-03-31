@extends('admin.admin-master')

@section('title', 'Thêm Chuyên Tàu')

@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Chuyến Tàu</legend>
		<span class="form_label">Tàu:</span>
		<span class="form_item">
			<select name="sltCate" class="select">
				@foreach($data as $value){
					<option value="{!! $value["train_id"]!!}">{!! $value["name"]!!}</option>
				}
				@endforeach
			</select>
		</span><br />
		<span class="form_label">Ga Đi:</span>
		<span class="form_item">
			<select name="sltCate" class="select">
				@foreach($data1 as $value){
					<option value="{!! $value["station_id"]!!}">{!! $value["name"]!!}</option>
				}
				@endforeach
			</select>
		</span><br />
		<span class="form_label">Ga Đến:</span>
		<span class="form_item">
			<select name="sltCate" class="select">
				@foreach($data1 as $value){
					<option value="{!! $value["station_id"]!!}">{!! $value["name"]!!}</option>
				}
				@endforeach
			</select>
		</span><br />
		<span class="form_label">Ngày Đi:</span>
		<span class="form_item">
			<input type="text" class="form-control input-datepicker" id="date-leave" readonly="readonly" placeholder="Ngày đi">
	    	<img class="image-calendar" src="https://us.123rf.com/450wm/mamanamsai/mamanamsai1412/mamanamsai141200858/35039467-calendar-icon-on-blue-button.jpg" id="btn-date-leave">
	    	<div class="input-timepicker">
	    		<input type="text" class="form-control" id="time-leave" placeholder="Giờ đi">
	    	</div>
		</span>
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnTripAdd" value="Thêm Chuyến Tàu" class="button" />
		</span>
	</fieldset>
</form> 

@endsection