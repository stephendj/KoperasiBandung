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
										    <form method="post" action="contact-post.html">
										    	<div>
											    	<span>Nama Koperasi</span>
											    	<span><input type="username" class="form-control" id="userName"></span>
											    </div>
										    	<div>
											    	<span>Jenis Koperasi</span>
											    	<span>
											    		<select class="audit-form">
														  <option value="volvo">Biasa</option>
														  <option value="saab">Simpan Pinjam</option>
														  <option value="mercedes">Blabla</option>
														  <option value="audi">Lain Lain</option>
														</select>
											    	</span>
											    </div>
											    <div>
											    	<span>Deskripsi Koperasi</span>
											    	<span><input type="username" class="form-control" id="userName"></span>
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
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="daftar-audit">
								 <h3>Koperasi A </h3>
							</div>
			 				<button class="tombol-audit">
								Hapus
							</button>
							<button class="tombol-audit cek-audit">
								Lihat Data
							</button>
							<div class="clearfix"></div>
							<div class="formjawaban">
								<div class="row contact"><!-- start contact -->		
									<div class="col-md-12">
									  <div class="contact-form">
									  	<h2>Ubah Data Koperasi</h2>
										    <form method="post" action="contact-post.html">
										    	<div>
											    	<span>Nama Koperasi</span>
											    	<span><input type="username" class="form-control" id="userName"></span>
											    </div>
										    	<div>
											    	<span>Jenis Koperasi</span>
											    	<span>
											    		<select class="audit-form">
														  <option value="volvo">Biasa</option>
														  <option value="saab">Simpan Pinjam</option>
														  <option value="mercedes">Blabla</option>
														  <option value="audi">Lain Lain</option>
														</select>
											    	</span>
											    </div>
											    <div>
											    	<span>Deskripsi Koperasi</span>
											    	<span><input type="username" class="form-control" id="userName"></span>
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
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="daftar-audit">
								 <h3>Koperasi B </h3>
							</div>
			 				<button class="tombol-audit">
								Hapus
							</button>
							<button class="tombol-audit cek-audit">
								Lihat Data
							</button>
							<div class="clearfix"></div>
							<div class="formjawaban">
								<div class="row contact"><!-- start contact -->		
									<div class="col-md-12">
									  <div class="contact-form">
									  	<h2>Ubah Data Koperasi</h2>
										    <form method="post" action="contact-post.html">
										    	<div>
											    	<span>Nama Koperasi</span>
											    	<span><input type="username" class="form-control" id="userName"></span>
											    </div>
										    	<div>
											    	<span>Jenis Koperasi</span>
											    	<span>
											    		<select class="audit-form">
														  <option value="volvo">Biasa</option>
														  <option value="saab">Simpan Pinjam</option>
														  <option value="mercedes">Blabla</option>
														  <option value="audi">Lain Lain</option>
														</select>
											    	</span>
											    </div>
											    <div>
											    	<span>Deskripsi Koperasi</span>
											    	<span><input type="username" class="form-control" id="userName"></span>
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
				</div>
			</div>
		</div>
		
</div>

@stop