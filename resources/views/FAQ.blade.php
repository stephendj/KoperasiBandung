@extends('layout-user')

@section('content')

<div class="container">
	<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-7 blog_left">
					<div class="row grids_btm top">
						<div class="grid_list">
						
							@forelse($pertanyaan as $p)
									<div class="pertanyaan-jawaban daftarkoperasi">
										<h3>Pertanyaan: </h3>
										<p>{{$p->pertanyaan_user}}</p>
										<div class="profilkoperasi">
										<h3>Jawaban: </h3>
											@if(isset($p['jawaban']))
											  <p>{{ $p['jawaban'] }}</p>
											 @else
											  <p> Belum dijawab </p>
											@endif
										</div> 	   
						 			</div>
							 			
							@empty
								<div class="row grids_btm top">
									Tidak ada koperasi
								</div>
							@endforelse

						</div>
					</div>
			</div>
			<div class="col-md-5 blog_right">
				  	<h2>Ajukan Pertanyaan</h2>
					@if(!is_null(Session::get('message')))            
	    					<div class="alert alert-success">
	        					<a href="#" class="close" data-dismiss="alert">&times;</a>
	        					<strong>Sukses!</strong> {{Session::get('message')}}
	    					</div>
				        @endif

 						 {{ Form::open(array('url'=>'bertanya', 'method'=>'POST', 'files'=>true)) }}
					    	<div>
						    	<span>Nama</span>
						    	<span>{{ Form::text('userName', Input::old('userName'), array('class' => 'form-control')) }}<br>{{ "<div id=\"alert\">".$errors->first('userName')."</div>" }}</span>
						    </div>
						    <div>
						    	<span>Email</span>
						    	<span>{{ Form::text('inputEmail3', Input::old('inputEmail3'), array('class' => 'form-control', 'placeholder' => 'cth: example@gmail.com')) }}<br>{{ "<div id=\"alert\">".$errors->first('inputEmail3')."</div>" }}</span>
						    </div>
						    <div>
						    	<span>Pertanyaan</span>
						    	<span>{{ Form::textArea('userMsg', Input::old('userMsg'), array('class' => 'form-control')) }}<br>{{ "<div id=\"alert\">".$errors->first('userMsg')."</div>" }}</span>
						    </div>
						  
						   <div>
						   		<span><input type="submit" value="Bertanya"></span>
						  </div>
					    {{ Form::close() }}


				    </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div><!-- end blog -->
</div>
</div>

@stop