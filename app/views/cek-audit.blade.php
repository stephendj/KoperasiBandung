@extends('layout-admin')

@section('content')

	<div class="container">
		<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="daftar-audit">
								 <h3>Audit Koperasi A </h3>
						</div>
			 				<button class="tombol-audit cek-audit">
								Cek Input
							</button>
							<a href="#" download="laporankoperasi">
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
										    <form method="post" action="contact-post.html">
										    	<div>
											    	<span>Pilih Koperasi</span>
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
											     	<span>upload laporan audit</span>
											    	<span><input class="audit-form" type="file" name="pic" accept="pdf/*"></span>
											    </div>
											   <div>
											   		<span><input type="submit" value="Agree"></span>
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
								 <h3>Audit Koperasi B </h3>
						</div>
			 				<button class="tombol-audit  cek-audit">
								Cek Input
							</button>
							<a href="#" download="laporankoperasi">
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
										    <form method="post" action="contact-post.html">
										    	<div>
											    	<span>Pilih Koperasi</span>
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
											     	<span>upload laporan audit</span>
											    	<span><input class="audit-form" type="file" name="pic" accept="pdf/*"></span>
											    </div>
											   <div>
											   		<span><input type="submit" value="Agree"></span>
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