@extends('layout-user')

@section('content')

<div class="container">
	<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-7 blog_left">
				@forelse($pertanyaan as $p)
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="pertanyaan-jawaban daftarkoperasi">
								  	<h3>Pertanyaan: </h3>
									<p>{!!$p->pertanyaan_user!!}</p>
									<div class="profilkoperasi">
										<h3>Jawaban</h3>
										<p>{!!$p->jawaban!!}</p></div> 	   
				 			</div>
				 			 <div class="clearfix"></div>
						</div>
					</div>
				@empty
					<h1><center>Tidak ada pertanyaan</center></h1>
				@endforelse
			</div>
			<div class="col-md-5 blog_right">
				<div class="pertanyaan-form">
				  	<h2>Ajukan Pertanyaan</h2>
				  		@if(!is_null(Session::get('message')))            
	    					<div class="alert alert-success">
	        					<a href="#" class="close" data-dismiss="alert">&times;</a>
	        					<strong>Sukses!</strong> {!! Session::get('message') !!}
	    					</div>
				        @endif
					    {!! Form::open(array('url'=>'bertanya', 'method'=>'POST')) !!}
					    	<div>
						    	<span>Nama</span>
						    	<span>{!! Form::text('nama', Input::old('nama'), array('class' => 'form-control')) !!}<br>{!! "<div id=\"alert\">".$errors->first('nama')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Email</span>
						    	<span>{!! Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'cth: example@gmail.com')) !!}<br>{!! "<div id=\"alert\">".$errors->first('email')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Pertanyaan</span>
						    	<span>{!! Form::textArea('pertanyaan_user', Input::old('pertanyaan_user'), array('class' => 'form-control')) !!}<br>{!! "<div id=\"alert\">".$errors->first('pertanyaan_user')."</div>" !!}</span>
						    </div>
						   	<div>
						   		<span><input type="submit" value="tanyakan"></span>
						  	</div>
					    {!! Form::close() !!}
				    </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div><!-- end blog -->
</div>
</div>

@stop