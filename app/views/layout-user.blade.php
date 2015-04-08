<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Creation a industrial bootstrap Website Template | Blog :: w3layouts</title>
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
{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/bootstrap.js')}}
{{HTML::script('js/bootstrap.min.js')}}
{{HTML::script('js/koperasi.js')}}
{{HTML::style('css/style.css')}}
{{HTML::style('css/koperasi.css')}}

</head>
<body>
<div class="header_bg"><!-- start header -->
	<div class="container">
		<div class="row header">
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.html"><img src="images/koperasibandunglogo.png" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        @if(Request::is('/'))
		        	<li class="active"><a href="{{URL::to('/')}}">Daftar Koperasi</a></li>
		        @else
		      		<li><a href="{{URL::to('/')}}">Daftar Koperasi</a></li>
		      	@endif
		        @if(Request::is('tanya'))
		        	<li class="active"><a href="tanya">Pertanyaan</a></li>
		        @else
		        	<li><a href="tanya">Pertanyaan</a></li>
		        @endif
		        @if(Request::is('ajukan-bentuk'))
		        	<li class="active"><a href="ajukan-bentuk">Pengajuan Pembentukan</a></li>
		        @else
		        	<li><a href="ajukan-bentuk">Pengajuan Pembentukan</a></li>
		        @endif
		        @if(Request::is('ajukan-bubar'))
		        	<li class="active"><a href="ajukan-bubar">Pengajuan Pembubaran</a></li>
		        @else
		        	<li><a href="ajukan-bubar">Pengajuan Pembubaran</a></li>
		        @endif
		        @if(Request::is('audit'))
		        	<li class="active"><a href="audit">Unggah Audit</a></li>
		        @else
		        	<li><a href="audit">Unggah Audit</a></li>
		        @endif
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">
		  		@if(Request::is('/'))
		        	Daftar Koperasi
		      	@endif
		        @if(Request::is('tanya'))
		        	Pertanyaan
		        @endif
		        @if(Request::is('ajukan-bentuk'))
		        	Pengajuan Pembentukan>
		        @endif
		        @if(Request::is('ajukan-bubar'))
		        	Pengajuan Pembubaran
		        @endif
		        @if(Request::is('audit'))
		        	Unggah Audit
		        @endif
		  </li>
		</ol>
	</div>
</div>
<div class="main"><!-- start main -->

@yield('content', 'default content')

<div class="footer_bg"><!-- start footre -->
	<!-- <div class="container">
		<div class="row  footer">
			<div class="col-md-3 span1_of_4">
				<h4>about us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry .....</p>
				<h5>Address</h5>
				<p class="top">500 Lorem Ipsum Dolor Sit,</p>
				<p>22-56-2-9 Sit Amet,</p>
				<p>USA</p>
				<p>Phone:(00) 222 666 444</p>
				<p>Fax: (000) 000 00 00 0</p>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>latest posts</h4>
				<span><a href="#"> Fusce scelerisque massa vitae </a></span>
				<p>25 april 2013</p>
				<span><a href="#">Pellentesque bibendum ante </a></span>
				<p>15 march 2013</p>
				<span><a href="#">Maecenas quis ipsum sed magna </a></span>
				<p>25 april 2013</p>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>latest comments</h4>
				<span><a href="#">It is a long established fact that a reader will looking layout.</a></span>
				<span><a href="#">There are many variations of passages of Lorem Ipsum available words.</a></span>
				<span><a href="#">It is a long established fact that a reader will looking layout.</a></span>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>photostream</h4>
				<ul class="f_nav list-unstyled">
					<li><a href="#"><img src="images/f_pic1.jpg" alt="" class="img-responsive"/></a></li>
					<li><a href="#"><img src="images/f_pic3.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic4.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic5.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic7.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic1.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic6.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic8.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic2.jpg" alt="" class="img-responsive"/> </a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div> -->
</div>
<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>