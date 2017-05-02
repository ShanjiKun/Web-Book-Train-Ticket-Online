@extends('admin.admin-master')

@section('title', 'Sửa Toa Tàu')
@section('logo', 'Sửa Toa Tàu')
@section('content')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<fieldset>
		<legend>Thông Tin Toa Tàu</legend>
		<span class="form_label">Tên Toa Tàu:</span>
		<span class="form_item">
			<input type="text" name="txtCarName" class="textbox" value="{!! old('txtCarName')!!}"/>
		</span><br />
		<span class="form_label">Tổng Số Ghế:</span>
		<span class="form_item">
			<input type="text" name="txtNumSeat" class="textbox" value="{!! old('txtNumSeat')!!}"/>
		</span><br />
		<span class="form_label">Loại Chỗ:</span>
		<span class="form_item">
			<select name="sltCar" class="select">
				@foreach($data1 as $value){
					<option value="{!! $value["type_seat_id"]!!}">{!! $value["type_seat_id"]!!}</option>
				}
				@endforeach
			</select>
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnCarUpdate" value="Sửa Toa Tàu" class="button" onclick="return acceptDelete('Bạn có muốn sửa không')"/>
		</span>
	</fieldset>
</form>  
@endsection