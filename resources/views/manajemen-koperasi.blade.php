@extends('layout-admin')

@section('content')

	<div class="container">
		<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
					<div class="row">
						@if(!is_null(Session::get('message')))            
	    					<div class="alert alert-success">
	        					<a href="#" class="close" data-dismiss="alert">&times;</a>
	        					<strong>Sukses!</strong> {!! Session::get('message') !!}
	    					</div>
				        @endif
						<button class="buat-koperasi">
							Tambah Koperasi Baru
						</button>
					</div>
					<div class="row">
						<div class="formjawaban">
								<div class="row contact"><!-- start contact -->		
									<div class="col-md-12">
									  <div class="contact-form">
									  	<h2>Tambahkan Koperasi</h2>
										    {!! Form::open(array('url'=>'admin/koperasi/add', 'method'=>'POST')) !!}
										    	<div>
											    	<span>ID Pendiri</span>
											    	<span>{!! Form::text('id_pendiri', Input::old('id_pendiri'), array('class' => 'form-control')) !!}
											    		{!! "<div id=\"alert\">".$errors->first('id_pendiri')."</div>" !!}</span>
											    </div>
										    	<div>
											    	<span>Nama Koperasi</span>
											    	<span>{!! Form::text('nama', Input::old('nama'), array('class' => 'form-control')) !!}
											    		{!! "<div id=\"alert\">".$errors->first('nama')."</div>" !!}</span>
											    </div>
										    	<div>
											    	<span>Jenis Koperasi</span>
											    	<span>
											    		<select class="audit-form" name="jenis_koperasi">
															<option value="Produksi">Produksi</option>
										    				<option value="Konsumsi">Konsumsi</option>
															<option value="Simpan Pinjam">Simpan Pinjam</option>
															<option value="Dagang">Serba Usaha</option>
														</select>
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
					@forelse ($koperasi as $kop)
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="daftar-audit">
								 <h3>{{$kop->nama}}</h3>
							</div>
							<a href="{{URL::to('admin/koperasi/delete/'.$kop->id)}}" >
				 				<button class="tombol-audit">
									Hapus
								</button>
							</a>
							<button class="tombol-audit cek-audit">
								Lihat Data
							</button>
							<div class="clearfix"></div>
							<div class="formjawaban">
								<div class="row contact"><!-- start contact -->		
									<div class="col-md-12">
									  <div class="contact-form">
									  	<h2>Ubah Data Koperasi</h2>
										    {!! Form::open(array('url'=>'admin/koperasi/edit/'.$kop->id, 'method'=>'POST')) !!}
										    	<input type="hidden" name="id_pendiri" value="{{$kop->id_pendiri}}">
											    <div>
											    	<span>Nama Koperasi</span>
											    	<span><input type="text" class="form-control" name="nama" value="{{$kop->nama}}">
											    		{!! "<div id=\"alert\">".$errors->first('nama')."</div>" !!}</span>
											    </div>
										    	<div>
											    	<span>Jenis Koperasi</span>
											    	<span>
											    		<select class="audit-form" name="jenis_koperasi">
											    			@if($kop->jenis_koperasi === "Produksi")
											    				<option value="Produksi" selected>Produksi</option>
											    				<option value="Konsumsi">Konsumsi</option>
																<option value="Simpan Pinjam">Simpan Pinjam</option>
																<option value="Dagang">Dagang</option>
															@elseif($kop->jenis_koperasi === "Konsumsi")
																<option value="Produksi" >Produksi</option>
											    				<option value="Konsumsi" selected>Konsumsi</option>
																<option value="Simpan Pinjam">Simpan Pinjam</option>
																<option value="Dagang">Dagang</option>
															@elseif($kop->jenis_koperasi === "Simpan Pinjam")
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
											    	</span>
											    </div>
											    <div>
											    	<span>Alamat</span>
											    	<span><input type="text" class="form-control" name="alamat" value="{{$kop->alamat}}">
											    	{!! "<div id=\"alert\">".$errors->first('alamat')."</div>" !!}</span>
											    </div>
											    <div>
											    	<span>Nomor Telepon</span>
											    	<span><input type="text" class="form-control" name="no_telepon" value="{{$kop->no_telepon}}">
											    		{!! "<div id=\"alert\">".$errors->first('no_telepon')."</div>" !!}</span>
											    </div>
											    <div>
											    	<span>Deskripsi Koperasi</span>
											    	<span><input type="text" class="form-control" name="deskripsi" value="{{$kop->deskripsi}}">
											    		{!! "<div id=\"alert\">".$errors->first('deskripsi')."</div>" !!}</span>
											    </div>
											    
											    <div>
											   		<span><input type="submit" value="Ubah Data"></span>
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
					@empty
					@endforelse
				</div>
			</div>
		</div>
		
</div>

@stop