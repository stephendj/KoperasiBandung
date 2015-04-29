@extends('layout-user')

@section('content')

	<div class="container">
		<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
				<div class="company_ad">
				     	<h2>Syarat Pengajuan Pembubaran Koperasi:</h2>
      				<p>Pembubaran Oleh Rapat Anggota </p>
      				<p>1.Rapat Anggota Khusus Pembubaran Koperasi dengan materi "Memutuskan Pembubaran"</p>
      				<p>2.Menunjuk tim Penyelesai Pengurus Surat Pemberitahuan ke Dinas Koperasi PK</p><br>
      				<p> Hasil rapat anggota pembubaran dikirim maksimal 14 hari dilampiri : </p>
      				<p>	1.Keputusan Rapat Anggota </p>
      				<p>	2.Daftar Anggota dan daftar Hadir Rapat Berita Acara penyelesaian Pembubaran ( dibuat oleh tim Penyelesai ) </p>
      				<p>	3.Anggaran Dasar Asli</p>
				   	
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
				        @if(!is_null(Session::get('messagefail')))
				        	<div class="alert alert-danger">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Error!</strong> {!! Session::get('messagefail') !!}
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