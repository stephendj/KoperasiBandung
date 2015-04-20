@extends('layout-admin')

@section('content')

	<div class="container">
		<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
					<div class="row">
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
										    <form method="post" action="addKoperasi()">
										    	<div>
											    	<span>ID Pendiri</span>
											    	<span><input type="username" class="form-control" name="id_pendiri"></span>
											    </div>
										    	<div>
											    	<span>Nama Koperasi</span>
											    	<span><input type="username" class="form-control" name="nama"></span>
											    </div>
										    	<div>
											    	<span>Jenis Koperasi</span>
											    	<span>
											    		<select class="audit-form" name="jenis_koperasi">
															<option value="Produksi">Produksi</option>
										    				<option value="Konsumsi">Konsumsi</option>
															<option value="Simpan Pinjam">Simpan Pinjam</option>
															<option value="Dagang">Dagang</option>
														</select>
											    	</span>
											    </div>
											    <div>
											    	<span>Alamat</span>
											    	<span><input type="username" class="form-control" name="alamat"></span>
											    </div>
											    <div>
											    	<span>Nomor Telepon</span>
											    	<span><input type="username" class="form-control" name="no_telepon"></span>
											    </div>
											    <div>
											    	<span>Deskripsi Koperasi</span>
											    	<span><input type="username" class="form-control" name="deskripsi"></span>
											    </div>
											   <div>
											   		<span><input type="submit" value="Tambah"></span>
											  </div>
										    </form>
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
							<a href="{{URL::to('admin/deleteKoperasi/'.$kop->id_koperasi)}}" >
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
										    <form method="post" action="editKoperasi">
											    <input type="hidden" name="id" value="{{$kop->id_koperasi}}">
										    	<div>
											    	<span>Nama Koperasi</span>
											    	<span><input type="username" class="form-control" name="nama" value="{{$kop->nama}}"></span>
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
											    	<span><input type="username" class="form-control" name="alamat" value="{{$kop->alamat}}"></span>
											    </div>
											    <div>
											    	<span>Nomor Telepon</span>
											    	<span><input type="username" class="form-control" name="no_telepon" value="{{$kop->no_telepon}}"></span>
											    </div>
											    <div>
											    	<span>Deskripsi Koperasi</span>
											    	<span><input type="username" class="form-control" name="deskripsi" value="{{$kop->deskripsi}}"></span>
											    </div>
											    
											    <div>
											   		<span><input type="submit" value="Ubah Data"></span>
											    </div>
										    </form>
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