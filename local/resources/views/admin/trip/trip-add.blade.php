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
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnTripAdd" value="Thêm Chuyến Tàu" class="button" />
		</span>
	</fieldset>
</form>  
@endsection