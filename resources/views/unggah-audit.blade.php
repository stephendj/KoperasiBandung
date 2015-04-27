@extends('layout-user')

@section('content')

	<div class="container">
		<div class="row contact"><!-- start contact -->				
				<div class="col-md-6">
				<div class="company_ad audit">
				     	<h2>Kriteria Penilaian :</h2>
						 <p>1. Permodalan</p>
						 <p>2. Kualitas Aktiva Produktif</p>
						 <p>3. Manajemen</p>
						 <p>4. Efisiensi</p>
						 <p>5. Likuiditas</p>
						 <p>6. Kemandirian dan Pertumbuhan </p>
						 <p>7. Jatidiri</p>
				   	
			   	</div>
				</div>				
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Unggah Audit</h2>
				  	@if(!is_null(Session::get('message')))
			    		<br>            
    					<div class="alert alert-success">
        					<a href="#" class="close" data-dismiss="alert">&times;</a>
        					<strong>Sukses!</strong> {!! Session::get('message') !!}
    					</div>
			        @endif
					     {!! Form::open(array('url'=>'laporansend', 'method'=>'POST', 'files'=>true)) !!}
					    	<div>
						    	<span>Pilih Koperasi</span>
						    	<span>
						    		<select name = "id_koperasi" class="audit-form">
						    			@foreach($koperasi as $kop)
									  <option value="{!! $kop->id !!}">{!! $kop->nama !!}</option>
									  @endforeach
									</select>
						    	</span>
						    </div>
						    <div>
						    	<span>Nomor Kartu Tanda Penduduk Pengunggah</span>
						    	<span>{!! Form::text('id_pengirim', Input::old('id_pengirim'), array('class' => 'form-control', 'placeholder' => 'cth: 1923298928329')) !!}<br>{!! "<div id=\"alert\">".$errors->first('id_pengirim')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Tahun Laporan</span>
						    	<span>{!! Form::text('tahun', Input::old('tahun'), array('class' => 'form-control', 'placeholder' => 'cth: 2012')) !!}<br>{!! "<div id=\"alert\">".$errors->first('tahun')."</div>" !!}</span>
						    </div>
						    <div>
						     	<span>upload laporan audit</span>
						    	<span><input type="file" name="file" accept=".zip, .rar">{!! "<div id=\"alert\">".$errors->first('file')."</div>" !!}</span>
						    </div>
						   <div>
						   		<span><input type="submit" value="unggah"></span>
						  </div>
					    {!! Form::close() !!}


				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>

@stop