@extends('layout-user')

@section('content')

	<div class="container">
		<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
				<div class="company_ad">
				     	<h2>Syarat Pengajuan Pembubaran Koperasi:</h2>
      				
						 <p>1. Bla bla bla bla</p>
						 <p>2. Bla bla bla bla</p>
						 <p>3. Bla bla bla bla</p>
						 <p>4. Bla bla bla bla</p>
						 <p>5. Bla bla bla bla</p>
						 <p>6. Bla bla bla bla</p>
						 <p>7. Bla bla bla bla</p>
				   	
			   	</div>
				</div>				
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Form Pengajuan Pembubaran Koperasi</h2>
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
						     	<span>upload dokumen .zip/.rar</span>
						    	<span><input type="file" name="pic" accept=".zip/*, .rar/*"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Bubarkan Koperasi"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>

@stop