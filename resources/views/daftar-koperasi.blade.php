@extends('layout-user')

@section('content')

<div class="container">
	<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-8 blog_left">
				@forelse($koperasi as $kop)
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="grid_1_of_1 daftarkoperasi">
								  	<h3>{!! $kop->nama !!}</h3>
									<p>{!! $kop->jenis_koperasi !!}</p>
									<div class="profilkoperasi">
										<p>{!! $kop->alamat !!}</p>
										<p>Nomor Telepon: {!! $kop->no_telepon !!}</p>
										<p>{!! $kop->deskripsi !!}</p>
									</div> 	   
				 			</div>
				 			<div class="images_1_of_1">
								<center><font size="5" color="white">Skor:</font></center><p>{!! $kop->penilaian !!}</p>
							</div>
				 			 <div class="clearfix"></div>
						</div>
					</div>
				@empty
					<div class="row grids_btm top">
						Tidak ada koperasi
					</div>
				@endforelse
			</div>
			<div class="col-md-4 blog_right">
				<h2>Cari Koperasi</h2>
				<div class="news_letter carikoperasi">
						{!! Form::open(array('url'=>'cari-koperasi', 'method'=>'POST')) !!}
							{!! Form::text('nama', '',array('class' => 'form-control')) !!}
							<input type="submit" value="cari">
						{!! Form::close() !!}
				</div>
				<h2>Jenis Koperasi</h2>
				<h4>1. Koperasi Produksi</h4>
				<p> Koperasi Produksi melakukan usaha produksi atau menghasilkan barang. Barang-barang yang dijual di koperasi adalah hasil produksi anggota koperasi. </p>
				<h4>2. Koperasi Konsumsi</h4>
				<p>Koperasi Konsumsi menyediakan semua kebutuhan para anggota dalam bentuk barang antara lain berupa:bahan makanan, pakaian, alat tulis atau peralatan rumah tangga. </p>
				<h4>3. Koperasi Simpan Pinjam</h4>
				<p> Koperasi Simpan Pinjam melayani para anggotanya untuk menabung dengan mendapatkan imbalan. Bagi anggota yang memerlukan dana dapat meminjam dengan memberikan jasa kepada koperasi. </p>
				<h4>4. Koperasi Serba Usaha</h4>
				<p> Koperasi Serba Usaha (KSU) terdiri atas berbagai jenis usaha.Seperti menjual kebutuhan pokok dan barang-barang hasil produksi anggota, melayani simpan. </p>
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div><!-- end blog -->
</div>
</div>

@stop