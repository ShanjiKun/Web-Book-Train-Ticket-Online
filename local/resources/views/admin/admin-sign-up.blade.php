@extends('../master/master')
@section('title','Admin')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/admin-sign-up.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/admin/admin-sign-up.js') }}"></script>
	<div id="admin"> 
 	<div class="row"> 
  		<div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
	   		<legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Sign Up!</legend> 
	   		<form action="" method="post" class="frmSignUp" role="form">  
	   			<input class="form-control" name="userName" placeholder="UserName" type="text"> 
		    	
		    	<input class="form-control" name="password" placeholder="Password" type="password">
		    	<input class="form-control" name="retypepassword" placeholder="Confirm Password" type="password">
		    	<input class="form-control" name="email" placeholder="Email" type="email">  
		    	<label for=""> Date Sign Up</label> 
		    	<div class="row"> 
			     	<div class="col-xs-4 col-md-4"> 
				     	<select class="form-control">              
				     		<option value="date">Date</option>            
				     	</select> 
			     	</div> 
			     	<div class="col-xs-4 col-md-4"> 	
				     	<select class="form-control">              
				     		<option value="month">Month</option>            
				     	</select> 
			     	</div> 
			     	<div class="col-xs-4 col-md-4"> 	
			     		<select class="form-control">              
			     			<option value="year">Year</option>            
			     		</select> 
			     	</div> 
		    	</div> 
		    	<label class="radio-inline"><input name="sex" id="inlineCheckbox1" value="male" type="radio">Nam </label> 
		    	<label class="radio-inline"><input name="sex" id="inlineCheckbox2" value="female" type="radio">Nữ </label> 
		    	<br> 
		    	<br> 
		    	<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button> 
	   		</form> 
  		</div> 
 	</div>
	
	</div>
@stop