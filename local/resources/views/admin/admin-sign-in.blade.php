
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/admin-sign-in.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('/js/admin/admin-sign-in.js') }}"></script>

	<div id="admin-sign-in"> 
	 	<div class="row"> 
	  		<div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
		   		<legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Sign In!</legend> 
		   		<form action="" method="post" class="frmSignIn" role="form"> 
		   			<input class="form-control" name="userName" placeholder="UserName" type="text">
			    	<input class="form-control" name="password" placeholder="Password" type="password"> 
			    	
			    	<br> 
			    	<br> 
			    	<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button> 
		   		</form> 
	  		</div> 
	 	</div>
		
	</div>