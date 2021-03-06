@extends('layout-admin')

@section('content')

	<div class="container">
		<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					    <ul id="myTab" class="nav nav-tabs" role="tablist">
					      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><h5 class="paneltabajuan">Ajuan Pembentukan Koperasi</h5></a></li>
					      <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false"><h5 class="paneltabajuan">Ajuan Pembentukan Koperasi Simpan Pinjam</h5></a></li>
					      <li role="presentation" class=""><a href="#dropdown1" role="tab" id="dropdown-tab" data-toggle="tab" aria-controls="dropdown" aria-expanded="false"><h5 class="paneltabajuan">Ajuan Pembubaran Koperasi</h5></a></li>
					    </ul>
					    <div id="myTabContent" class="tab-content">
				    	@if(!is_null(Session::get('message')))
				    		<br>            
	    					<div class="alert alert-success">
	        					<a href="#" class="close" data-dismiss="alert">&times;</a>
	        					<strong>Sukses!</strong> {!! Session::get('message') !!}
	    					</div>
				        @endif
					      <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						    @if(count($ajuanbentuk)>0)
					      		@foreach($ajuanbentuk as $ajuan)
						    	<div class="row grids_btm top">
									<div class="grid_list">
										<div class="daftar-audit">
										    <h3>{!! $ajuan->nama_koperasi !!}</h3>
										    @if($ajuan->status === 'Sedang Diproses')
												<p>{!! $ajuan->status !!}</p>
											@elseif($ajuan->status === 'Diterima')
												<p><font color="green">{!! $ajuan->status !!}</font></p>
											@elseif($ajuan->status === 'Ditolak')
												<p><font color="red">{!! $ajuan->status !!}</font></p>
											@endif
										</div>
						 				<button class="tombol-audit cek-audit">Lihat</button>
						 				<a href="{!! url('admin/ajuan/delete/'.$ajuan->id) !!}">
											<button class="tombol-audit cek-audit">Hapus</button>
										</a>
										<a href="{!! asset('upload/ajuan/'.$ajuan->file) !!}" download>
											<button class="tombol-audit cek-audit">Unduh Dokumen Ajuan</button>
										</a>
										<div class="clearfix"></div>	
											<div class="formjawaban">
												<div class="row contact"><!-- start contact -->		
													<div class="col-md-12">
													  <div class="contact-form">
													  	<h2>Data Ajuan</h2>
														    {!! Form::open(array('url'=>'admin/ajuan/edit/'.$ajuan->id, 'method'=>'POST')) !!}
														    	<input type="hidden" name="nama" value="{!! $ajuan->nama_koperasi !!}">
														    	<div>
															    	<span>Nomor Kartu Tanda Penduduk</span>
															    	<span><input type="text" class="form-control" name="id_pengaju" value="{!! $ajuan->id_pengaju !!}" readonly></span>
															    </div>
															    <div>
															    	<span>Email</span>
															    	<span><input type="text" class="form-control" name="email" value="{!! $ajuan->email !!}" readonly></span>
															    </div>
															    <div>
															    	<span>Jenis Koperasi</span>
															    	<span><input type="text" class="form-control" name="jenis_koperasi" value="{!! $ajuan->jenis_koperasi !!}" readonly></span>
															    </div>
																  <div>
																   		<span><input class="tombol-ajuan" name="action" type="submit" value="Tolak Ajuan"></span>
																  </div>
																  <div>
																   		<span><input class="tombol-ajuan" name="action" type="submit" value="Terima Ajuan"></span>
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
							@else
							  <center><br><h3>Tidak Ada Ajuan</h3></center>
							@endif
						  </div>
					      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					      	@if(count($ajuansimpanpinjam)>0)
			      			  	@foreach($ajuansimpanpinjam as $ajuan)
					         	<div class="row grids_btm top">
									<div class="grid_list">
										<div class="daftar-audit">
										    <h3>{!! $ajuan->nama_koperasi !!}</h3>
										    @if($ajuan->status === 'Sedang Diproses')
												<p>{!! $ajuan->status !!}</p>
											@elseif($ajuan->status === 'Diterima')
												<p><font color="green">{!! $ajuan->status !!}</font></p>
											@elseif($ajuan->status === 'Ditolak')
												<p><font color="red">{!! $ajuan->status !!}</font></p>
											@endif
										</div>
						 				<button class="tombol-audit cek-audit">Lihat</button>
						 				<a href="{!! url('admin/ajuan/delete/'.$ajuan->id) !!}">
											<button class="tombol-audit cek-audit">Hapus</button>
										</a>
										<a href="{!! asset('upload/ajuan/'.$ajuan->file) !!}" download>
											<button class="tombol-audit">Unduh Dokumen Ajuan</button>
										</a>
										<div class="clearfix"></div>	
											<div class="formjawaban">
												<div class="row contact"><!-- start contact -->		
													<div class="col-md-12">
													  <div class="contact-form">
													  	<h2>Data Ajuan</h2>
														    {!! Form::open(array('url'=>'admin/ajuan/edit/'.$ajuan->id, 'method'=>'POST')) !!}
														    	<input type="hidden" name="nama" value="{!! $ajuan->nama_koperasi !!}">
														    	<div>
															    	<span>Nomor Kartu Tanda Penduduk</span>
															    	<span><input type="text" class="form-control" name="id_pengaju" value="{!! $ajuan->id_pengaju !!}" readonly></span>
															    </div>
															    <div>
															    	<span>Email</span>
															    	<span><input type="text" class="form-control" name="email" value="{!! $ajuan->email !!}" readonly></span>
															    </div>
															    <div>
															    	<span>Jenis Koperasi</span>
															    	<span><input type="text" class="form-control" name="jenis_koperasi" value="{!! $ajuan->jenis_koperasi !!}" readonly></span>
															    </div>
																  <div>
																   		<span><input class="tombol-ajuan" name="action" type="submit" value="Tolak Ajuan"></span>
																  </div>
																  <div>
																   		<span><input class="tombol-ajuan" name="action" type="submit" value="Terima Ajuan"></span>
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
							@else
							  <center><br><h3>Tidak Ada Ajuan</h3></center>
							@endif
					      </div>
					      <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
					      	@if(count($ajuanbubar)>0)
				      			@foreach($ajuanbubar as $ajuan)
					         	<div class="row grids_btm top">
									<div class="grid_list">
										<div class="daftar-audit">
										    <h3>{!! $ajuan->nama_koperasi !!}</h3>
										    @if($ajuan->status === 'Sedang Diproses')
												<p>{!! $ajuan->status !!}</p>
											@elseif($ajuan->status === 'Diterima')
												<p><font color="green">{!! $ajuan->status !!}</font></p>
											@elseif($ajuan->status === 'Ditolak')
												<p><font color="red">{!! $ajuan->status !!}</font></p>
											@endif
										</div>
						 				<button class="tombol-audit cek-audit">Lihat</button>
						 				<a href="{!! url('admin/ajuan/delete/'.$ajuan->id) !!}">
											<button class="tombol-audit cek-audit">Hapus</button>
										</a>
										<a href="{!! asset('upload/ajuan/'.$ajuan->file) !!}" download>
											<button class="tombol-audit">Unduh Dokumen Ajuan</button>
										</a>
										<div class="clearfix"></div>	
											<div class="formjawaban">
												<div class="row contact"><!-- start contact -->		
													<div class="col-md-12">
													  <div class="contact-form">
													  	<h2>Data Ajuan</h2>
														    {!! Form::open(array('url'=>'admin/ajuan/edit/'.$ajuan->id, 'method'=>'POST')) !!}
														    	<input type="hidden" name="nama" value="{!! $ajuan->nama_koperasi !!}">
														    	<div>
															    	<span>Nomor Kartu Tanda Penduduk</span>
															    	<span><input type="text" class="form-control" name="id_pengaju" value="{!! $ajuan->id_pengaju !!}" readonly></span>
															    </div>
															    <div>
															    	<span>Email</span>
															    	<span><input type="text" class="form-control" name="email" value="{!! $ajuan->email !!}" readonly></span>
															    </div>
															    <div>
															    	<span>Jenis Koperasi</span>
															    	<span><input type="text" class="form-control" name="jenis_koperasi" value="{!! $ajuan->jenis_koperasi !!}" readonly></span>
															    </div>
																  <div>
																   		<span><input class="tombol-ajuan" name="action" type="submit" value="Tolak Ajuan"></span>
																  </div>
																  <div>
																   		<span><input class="tombol-ajuan" name="action" type="submit" value="Terima Ajuan"></span>
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
							@else
							  <center><br><h3>Tidak Ada Ajuan</h3></center>
							@endif
					      </div> 
					    </div>
					  </div>
				</div>
			</div>
		</div>
		
</div>

@stop