@extends('layout-user')

@section('content')

<div class="container">
	<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-7 blog_left">
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="pertanyaan-jawaban daftarkoperasi">
								  	<h3>Pertanyaan: </h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quae sit qui, eum quas? Quaerat quo veniam impedit atque porro ullam, delectus consequuntur molestias, repudiandae fuga animi maiores incidunt ab? </p>
									<div class="profilkoperasi">
										<h3>Jawaban</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nesciunt ullam repudiandae amet saepe expedita reiciendis fugit veniam fugiat natus enim ipsa, quibusdam, ratione consectetur neque? Molestias enim sed facilis! </p></div> 	   
				 			</div>
				 			 <div class="clearfix"></div>
						</div>
					</div>
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="pertanyaan-jawaban daftarkoperasi">
								  	<h3>Pertanyaan: </h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quae sit qui, eum quas? Quaerat quo veniam impedit atque porro ullam, delectus consequuntur molestias, repudiandae fuga animi maiores incidunt ab? </p>
									<div class="profilkoperasi">
										<h3>Jawaban</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nesciunt ullam repudiandae amet saepe expedita reiciendis fugit veniam fugiat natus enim ipsa, quibusdam, ratione consectetur neque? Molestias enim sed facilis! </p></div> 	   
				 			</div>
				 			 <div class="clearfix"></div>
						</div>
					</div>
			</div>
			<div class="col-md-5 blog_right">
				<div class="pertanyaan-form">
				  	<h2>Ajukan Pertanyaan</h2>
					    {{ Form::open(array('url'=>'bertanya', 'method'=>'POST', 'files'=>true)) }}
					    	<div>
						    	<span>nama</span>
						    	<span><input type="username" class="form-control" id="userName"></span>
						    </div>
						    <div>
						    	<span>e-mail</span>
						    	<span><input type="email" class="form-control" id="inputEmail3"></span>
						    </div>
						    <div>
						    	<span>isi pertanyaan</span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="tanyakan"></span>
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