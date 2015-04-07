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
					      <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						    <div class="row grids_btm top">
								<div class="grid_list">
								<div class="daftar-audit">
									 <h3>Ajuan Pembentukan Koperasi A </h3>
									<p>Status Ajuan</p>
								</div>
					 				<button class="tombol-audit cek-audit">
										Lihat
									</button>
									<a href="#" download="laporankoperasi">
										<button class="tombol-audit">
											Unduh Dokumen Ajuan
										</button>
									</a>
									<div class="clearfix"></div>	
									<div class="formjawaban">
										<div class="row contact"><!-- start contact -->		
											<div class="col-md-12">
											  <div class="contact-form">
											  	<h2>Isi Ajuan</h2>
												    <form method="post" action="contact-post.html">
												    	<div>
													    	<span>Nomor Kartu Tanda Penduduk</span>
													    	<span><input type="username" class="form-control" id="userName"></span>
													    </div>
													    <div>
													    	<span>e-mail</span>
													    	<span><input type="email" class="form-control" id="inputEmail3"></span>
													    </div>
													    <div>
													    	<span>Jenis Koperasi</span>
													    	<span>
													    		<select>
																  <option value="volvo">Biasa</option>
																  <option value="saab">Simpan Pinjam</option>
																  <option value="mercedes">Blabla</option>
																  <option value="audi">Lain Lain</option>
																</select>
													    	</span>
													    </div>
														   <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Proses Ajuan"></span>
														  </div>
														  <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Tolak Ajuan"></span>
														  </div>
														  <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Terima Ajuan"></span>
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
					      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					         <div class="row grids_btm top">
								<div class="grid_list">
								<div class="daftar-audit">
									 <h3>Ajuan Pembentukan Koperasi Simpan Pinjam A </h3>
									<p>Status Ajuan</p>
								</div>
					 				<button class="tombol-audit cek-audit">
										Lihat
									</button>
									<a href="#" download="laporankoperasi">
										<button class="tombol-audit">
											Unduh Dokumen Ajuan
										</button>
									</a>
									<div class="clearfix"></div>	
									<div class="formjawaban">
										<div class="row contact"><!-- start contact -->		
											<div class="col-md-12">
											  <div class="contact-form">
											  	<h2>Isi Ajuan</h2>
												    <form method="post" action="contact-post.html">
												    	<div>
													    	<span>Nomor Kartu Tanda Penduduk</span>
													    	<span><input type="username" class="form-control" id="userName"></span>
													    </div>
													    <div>
													    	<span>e-mail</span>
													    	<span><input type="email" class="form-control" id="inputEmail3"></span>
													    </div>
													    <div>
													    	<span>Jenis Koperasi</span>
													    	<span>
													    		<select>
																  <option value="volvo">Biasa</option>
																  <option value="saab">Simpan Pinjam</option>
																  <option value="mercedes">Blabla</option>
																  <option value="audi">Lain Lain</option>
																</select>
													    	</span>
													    </div>
														   <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Proses Ajuan"></span>
														  </div>
														  <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Tolak Ajuan"></span>
														  </div>
														  <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Terima Ajuan"></span>
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
					      <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
					         <div class="row grids_btm top">
								<div class="grid_list">
								<div class="daftar-audit">
									 <h3>Ajuan Pembubaran Koperasi A </h3>
									<p>Status Ajuan</p>
								</div>
					 				<button class="tombol-audit cek-audit">
										Lihat
									</button>
									<a href="#" download="laporankoperasi">
										<button class="tombol-audit">
											Unduh Dokumen Ajuan
										</button>
									</a>
									<div class="clearfix"></div>	
									<div class="formjawaban">
										<div class="row contact"><!-- start contact -->		
											<div class="col-md-12">
											  <div class="contact-form">
											  	<h2>Isi Ajuan</h2>
												    <form method="post" action="contact-post.html">
												    	<div>
													    	<span>Nomor Kartu Tanda Penduduk</span>
													    	<span><input type="username" class="form-control" id="userName"></span>
													    </div>
													    <div>
													    	<span>e-mail</span>
													    	<span><input type="email" class="form-control" id="inputEmail3"></span>
													    </div>
													    <div>
													    	<span>Jenis Koperasi</span>
													    	<span>
													    		<select>
																  <option value="volvo">Biasa</option>
																  <option value="saab">Simpan Pinjam</option>
																  <option value="mercedes">Blabla</option>
																  <option value="audi">Lain Lain</option>
																</select>
													    	</span>
													    </div>
														   <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Proses Ajuan"></span>
														  </div>
														  <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Tolak Ajuan"></span>
														  </div>
														  <div>
														   		<span><input class="tombol-ajuan" type="submit" value="Terima Ajuan"></span>
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
			</div>
		</div>
		
</div>

@stop