<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Koperasi Bandung</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--  webfonts  -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- // webfonts  -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<link href="css/koperasi.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/koperasi.js"></script>

</head>
<body>
<div class="login-back">
<div class="login-box">
		<div class="contact-form">
	  		<h2>Login Admin Koperasi</h2>
		    <form method="post" action="admin">
		   	{!! Form::open(array('url'=>'admin', 'method'=>'POST')) !!}
		   	{!! "<div id=\"alert\">".$errors->first('error')."</div>" !!}
		    	<div>
			    	<span>username</span>{!! "<div id=\"alert\">".$errors->first('username')."</div>" !!}
			    	<span>{!! Form::text('username', Input::old('username'), array('class' => 'form-control')) !!}</span>
			    	
			    </div>
			    <div>
			    	<span>passowrd</span>{!! "<div id=\"alert\">".$errors->first('password')."</div>" !!}
			    	<span><input name="password" type="password" class="form-control" id="password"></span>

			    </div>
			   <div>
			   		<span><input class="tombol-ajuan" type="submit" value="Login"></span>
			  </div>
		    {!! Form::close() !!}
	    </div>
</div>
</div>
</body>
</html>