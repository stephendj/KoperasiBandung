@extends('layout-admin')

@section('content')

<div class="container">
	<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
				<div class="row">
					<div>
						<div class="row contact"><!-- start contact -->		
							<div class="col-md-12">
							    <div class="contact-form">
							  		<h2>Tambahkan Koperasi</h2>
								    {!! Form::open(array('url'=>'admin/ajuan/tambah-koperasi', 'method'=>'POST')) !!}
								    	<div>
									    	<span>ID Pendiri</span>
									    	@if(null!==Input::old('id_pendiri'))
									    	<span>{!! Form::text('id_pendiri', Input::old('id_pendiri'), array('class' => 'form-control')) !!}
									    		{!! "<div id=\"alert\">".$errors->first('id_pendiri')."</div>" !!}</span>
									    	@else
									    	<span>{!! Form::text('id_pendiri', $id_pendiri, array('class' => 'form-control')) !!}
									    		{!! "<div id=\"alert\">".$errors->first('id_pendiri')."</div>" !!}</span>
									    	@endif
									    </div>
								    	<div>
									    	<span>Nama Koperasi</span>
									    	@if(null!==Input::old('nama'))
									    	<span>{!! Form::text('nama', Input::old('nama'), array('class' => 'form-control')) !!}
									    		{!! "<div id=\"alert\">".$errors->first('nama')."</div>" !!}</span>
									    	@else
									    	<span>{!! Form::text('nama', $nama, array('class' => 'form-control')) !!}
									    		{!! "<div id=\"alert\">".$errors->first('nama')."</div>" !!}</span>
									    	@endif
									    </div>
								    	<div>
									    	<span>Jenis Koperasi</span>
									    	<span>
									    		@if(null!==Input::old('jenis_koperasi'))
									    		<select class="audit-form" name="jenis_koperasi">
													@if(Input::old('jenis_koperasi') === "Produksi")
									    				<option value="Produksi" selected>Produksi</option>
									    				<option value="Konsumsi">Konsumsi</option>
														<option value="Simpan Pinjam">Simpan Pinjam</option>
														<option value="Dagang">Dagang</option>
													@elseif(Input::old('jenis_koperasi') === "Konsumsi")
														<option value="Produksi" >Produksi</option>
									    				<option value="Konsumsi" selected>Konsumsi</option>
														<option value="Simpan Pinjam">Simpan Pinjam</option>
														<option value="Dagang">Dagang</option>
													@elseif(Input::old('jenis_koperasi') === "Simpan Pinjam")
														<option value="Produksi" >Produksi</option>
									    				<option value="Konsumsi" >Konsumsi</option>
														<option value="Simpan Pinjam" selected>Simpan Pinjam</option>
														<option value="Dagang">Dagang</option>
													@else
														<option value="Produksi" >Produksi</option>
									    				<option value="Konsumsi" >Konsumsi</option>
														<option value="Simpan Pinjam">Simpan Pinjam</option>
														<option value="Dagang" selected>Dagang</option>
									    			@endif
												</select>
									    		@else
									    		<select class="audit-form" name="jenis_koperasi">
													@if($jenis_koperasi === "Produksi")
									    				<option value="Produksi" selected>Produksi</option>
									    				<option value="Konsumsi">Konsumsi</option>
														<option value="Simpan Pinjam">Simpan Pinjam</option>
														<option value="Dagang">Dagang</option>
													@elseif($jenis_koperasi === "Konsumsi")
														<option value="Produksi" >Produksi</option>
									    				<option value="Konsumsi" selected>Konsumsi</option>
														<option value="Simpan Pinjam">Simpan Pinjam</option>
														<option value="Dagang">Dagang</option>
													@elseif($jenis_koperasi === "Simpan Pinjam")
														<option value="Produksi" >Produksi</option>
									    				<option value="Konsumsi" >Konsumsi</option>
														<option value="Simpan Pinjam" selected>Simpan Pinjam</option>
														<option value="Dagang">Dagang</option>
													@else
														<option value="Produksi" >Produksi</option>
									    				<option value="Konsumsi" >Konsumsi</option>
														<option value="Simpan Pinjam">Simpan Pinjam</option>
														<option value="Dagang" selected>Dagang</option>
									    			@endif
												</select>
												@endif
									    	</span>
									    </div>
									    <div>
									    	<span>Alamat</span>
									    	<span>{!! Form::text('alamat', Input::old('alamat'), array('class' => 'form-control')) !!}
									    		{!! "<div id=\"alert\">".$errors->first('alamat')."</div>" !!}</span>
									    </div>
									    <div>
									    	<span>Nomor Telepon</span>
									    	<span>{!! Form::text('no_telepon', Input::old('no_telepon'), array('class' => 'form-control')) !!}
									    		{!! "<div id=\"alert\">".$errors->first('no_telepon')."</div>" !!}</span>
									    </div>
									    <div>
									    	<span>Deskripsi Koperasi</span>
									    	<span>{!! Form::text('deskripsi', Input::old('deskripsi'), array('class' => 'form-control')) !!}
									    		{!! "<div id=\"alert\">".$errors->first('deskripsi')."</div>" !!}</span>
									    </div>
									   	<div>
									   		<span><input type="submit" value="Tambah"></span>
									  	</div>
								    {!! Form::close() !!}
							    </div>
			  				</div>		
			  				<div class="clearfix"></div>		
						</div> <!-- end contact --> 
					</div> 	
				</div>
			</div>
		</div>
	</div>	
</div>

@stop