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
								  	<h3>{{$kop->nama}}</h3>
									<p>{{$kop->jenis_koperasi}}</p>
									<div class="profilkoperasi">
										<p>{{$kop->alamat}}</p>
										<p>Nomor Telepon: {{$kop->no_telepon}}</p>
										<p>{{$kop->deskripsi}}</p>
									</div> 	   
				 			</div>
				 			<div class="images_1_of_1">
								<p>{{$kop->penilaian}}</p>
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

						<form>
							<input type="text" placeholder="nama koperasi">
							<input type="submit" value="cari">
						</form>
				</div>
				<h2>Jenis Koperasi</h2>
				<h4>1. Koperasi X</h4>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ipsum, est voluptatem distinctio consequatur doloremque! Dolore quia inventore, minima repellat fugit quod accusantium natus sed modi tempora earum voluptate praesentium! </p>
				<h4>2. Koperasi Y</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt inventore quos non earum laborum tempore libero doloribus quisquam, sed iste amet odio, fugiat nam id, laudantium adipisci voluptatibus tenetur ex. </p>
				<h4>3. Koperasi Z</h4>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque perferendis laudantium hic deleniti, eos dolorem tempore recusandae inventore non blanditiis facilis fugit id nihil ullam alias reprehenderit dolore temporibus officia. </p>
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div><!-- end blog -->
</div>
</div>

@stop