@extends('layout-admin')

@section('content')

	<div class="container">
		<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
				@foreach($laporan as $lap)
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="daftar-audit">
								 <h3>{!! $lap->nama !!}</h3>
						</div>
			 				<button class="tombol-audit cek-audit">
								Cek Input
							</button>
							<a href="{!! asset('upload/audit/'.$lap->file) !!}" download>
								<button class="tombol-audit">
									Unduh Laporan Audit
								</button>
							</a>
							<div class="clearfix"></div>	
							<div class="formjawaban">
								<div class="row contact"><!-- start contact -->		
									<div class="col-md-12">
									  <div class="contact-form">
									  	<h2>Isi Audit</h2>
										    {!! Form::open(array('url'=>'admin/audit/editnilai/'.$lap->id, 'method'=>'POST')) !!}
											    <div>
										    	<span>Permodalan</span>
										    	<span>{!! Form::text('permodalan', Input::old('permodalan'), array('class' => 'form-control', 'placeholder' => 'cth: 0')) !!}<br>{!! "<div id=\"alert\">".$errors->first('permodalan')."</div>" !!}</span>
										  		  </div>
										  		  <div>
										    	<span>Kualitas Aktiva Produktif</span>
										    	<span>{!! Form::text('kualitas_aktiva_produktif', Input::old('kualitas_aktiva_produktif'), array('class' => 'form-control', 'placeholder' => 'cth: 0')) !!}<br>{!! "<div id=\"alert\">".$errors->first('kualitas_aktiva_produktif')."</div>" !!}</span>
										  		  </div>
										  		  <div>
										    	<span>Manajemen</span>
										    	<span>{!! Form::text('manajemen', Input::old('manajemen'), array('class' => 'form-control', 'placeholder' => 'cth: 0')) !!}<br>{!! "<div id=\"alert\">".$errors->first('manajemen')."</div>" !!}</span>
										  		  </div>
										  		  <div>
										    	<span>Efisiensi</span>
										    	<span>{!! Form::text('efisiensi', Input::old('efisiensi'), array('class' => 'form-control', 'placeholder' => 'cth: 0')) !!}<br>{!! "<div id=\"alert\">".$errors->first('efisiensi')."</div>" !!}</span>
										  		  </div>
										  		  <div>
										    	<span>Likuiditas</span>
										    	<span>{!! Form::text('likuiditas', Input::old('likuiditas'), array('class' => 'form-control', 'placeholder' => 'cth: 0')) !!}<br>{!! "<div id=\"alert\">".$errors->first('likuiditas')."</div>" !!}</span>
										  		  </div>
										  		  <div>
										    	<span>Kemandirian dan Pertumbuhan</span>
										    	<span>{!! Form::text('kemandirian_dan_pertumbuhan', Input::old('kemandirian_dan_pertumbuhan'), array('class' => 'form-control', 'placeholder' => 'cth: 0')) !!}<br>{!! "<div id=\"alert\">".$errors->first('kemandirian_dan_pertumbuhan')."</div>" !!}</span>
										  		  </div>
										  		  <div>
										    	<span>Jatidiri Koperasi</span>
										    	<span>{!! Form::text('jatidiri_koperasi', Input::old('jatidiri_koperasi'), array('class' => 'form-control', 'placeholder' => 'cth: 0')) !!}<br>{!! "<div id=\"alert\">".$errors->first('jatidiri_koperasi')."</div>" !!}</span>
										  		  </div>
											   <div>
											   		<span><input type="submit" value="Agree"></span>
											  </div>
										    {!! Form::close() !!}
									    </div>
					  				</div>		
					  				<div class="clearfix"></div>		
								</div> <!-- end contact --> 
							</div> 	   
				 			 <div class="clearfix"></div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</div>
		
</div>

@stop