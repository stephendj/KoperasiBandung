@extends('layout-user')

@section('content')

	<div class="container">
		<div class="row contact"><!-- start contact -->				
				<div class="col-md-6">
				<div class="company_ad audit">
				     	<h2>Kriteria Penilaian :</h2>
      					<img src="images/det_pic.jpg">
						 <p>1. Permodalan</p>
						 <p>2. Kualitas Aktiva Produktif</p>
						 <p>3. Manajemen</p>
						 <p>4. Efisiensi</p>
						 <p>5. Likuiditas</p>
						 <p>6. Kemandirian dan Pertumbuhan </p>
						 <p>7. Jatidiri Koperasi</p>
				   	
			   	</div>
				</div>				
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Unggah Audit</h2>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span>Pilih Koperasi</span>
						    	<span>
						    		<select class="audit-form">
						    			@foreach($koperasi as $kop)
									  <option value="{!! $kop->nama !!}">{!! $kop->nama !!}</option>
									  @endforeach
									</select>
						    	</span>
						    </div>
						    <div>
						    	<span>Nomor Kartu Tanda Penduduk Pengunggah</span>
						    	<span><input type="username" class="form-control" id="userName"></span>
						    </div>
						    <div>
						     	<span>upload laporan audit</span>
						    	<span><input class="audit-form" type="file" name="pic" accept="pdf/*"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="unggah"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>

@stop