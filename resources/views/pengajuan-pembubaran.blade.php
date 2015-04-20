@extends('layout-user')

@section('content')

	<div class="container">
		<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
				<div class="company_ad">
				     	<h2>Syarat Pengajuan Pembubaran Koperasi:</h2>
      				
						 <p>1. Bla bla bla bla</p>
						 <p>2. Bla bla bla bla</p>
						 <p>3. Bla bla bla bla</p>
						 <p>4. Bla bla bla bla</p>
						 <p>5. Bla bla bla bla</p>
						 <p>6. Bla bla bla bla</p>
						 <p>7. Bla bla bla bla</p>
				   	
			   	</div>
				</div>				
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Form Pengajuan Pembubaran Koperasi</h2>
					    @if(!is_null(Session::get('message')))            
	    					<div class="alert alert-success">
	        					<a href="#" class="close" data-dismiss="alert">&times;</a>
	        					<strong>Sukses!</strong> {!!Session::get('message')!!}
	    					</div>
				        @endif
					    {!! Form::open(array('url'=>'ajuanbubar', 'method'=>'POST', 'files'=>true)) !!}
					    	<div>
						    	<span>Nomor Kartu Tanda Penduduk</span>
						    	<span>{!! Form::text('id_pengaju', Input::old('id_pengaju'), array('class' => 'form-control', 'placeholder' => 'cth: 1923298928329')) !!}<br>{!! "<div id=\"alert\">".$errors->first('id_pengaju')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Email</span>
						    	<span>{!! Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'cth: example@gmail.com')) !!}<br>{!! "<div id=\"alert\">".$errors->first('email')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Nama Koperasi</span>
						    	<span>
						    		<select name="nama_koperasi">
						    			@foreach($daftarkoperasi as $koperasi)
						    				<option value"{!!$koperasi->id_koperasi!!}">{!!$koperasi->nama!!}</option>
						    			@endforeach
						    		</select>
						    	</span>
						    </div>
						    <div>
						     	<span>Upload dokumen .zip/.rar</span>
						    	<span><input type="file" name="file" accept=".zip, .rar">{!! "<div id=\"alert\">".$errors->first('file')."</div>" !!}</span>
						    </div>
						   <div>
						   		<span><input type="submit" value="bubarkan koperasi"></span>
						  </div>
					    {!! Form::close() !!}
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>

@stop