@extends('layout-user')

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
					      	@forelse($ajuanbentuk as $ajuan)
							    <div class="row grids_btm top">
									<div class="grid_list">
										<div class="daftar-audit">
											<h3>Ajuan Pembentukan {{$ajuan->nama_koperasi}}</h3>
											<p>Dikirim : {{$ajuan->tgl_kirim}}</p>
										</div>
										<div class="status-ajuan">
											@if($ajuan->status === 'Sedang Diproses')
												<p>{!! $ajuan->status !!}</p>
											@elseif($ajuan->status === 'Diterima')
												<p><font color="green">{!! $ajuan->status !!}</font></p>
											@elseif($ajuan->status === 'Ditolak')
												<p><font color="red">{!! $ajuan->status !!}</font></p>
											@endif
											<p><font size="2">Waktu Perubahan Status {{$ajuan->tgl_ubah_status}}</font></p>
										</div>
										<div class="clearfix"></div>	
									</div>
								</div>
							@empty
								<div class="row grids_btm top">
									Tidak ada ajuan
								</div>
							@endforelse
					      </div>
					      <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					         @forelse($ajuansimpanpinjam as $ajuan)
							    <div class="row grids_btm top">
									<div class="grid_list">
										<div class="daftar-audit">
											<h3>Ajuan Pembentukan {{$ajuan->nama_koperasi}}</h3>
											<p>Dikirim : {{$ajuan->tgl_kirim}}</p>
										</div>
										<div class="status-ajuan">
											@if($ajuan->status === 'Sedang Diproses')
												<p>{!! $ajuan->status !!}</p>
											@elseif($ajuan->status === 'Diterima')
												<p><font color="green">{!! $ajuan->status !!}</font></p>
											@elseif($ajuan->status === 'Ditolak')
												<p><font color="red">{!! $ajuan->status !!}</font></p>
											@endif
											<p><font size="2">Waktu Perubahan Status {{$ajuan->tgl_ubah_status}}</font></p>
										</div>
										<div class="clearfix"></div>	
									</div>
								</div>
							@empty
								<div class="row grids_btm top">
									Tidak ada ajuan
								</div>
							@endforelse
					      </div>
					      <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
					         @forelse($ajuanbubar as $ajuan)
							    <div class="row grids_btm top">
									<div class="grid_list">
										<div class="daftar-audit">
											<h3>Ajuan Pembubaran {{$ajuan->nama_koperasi}}</h3>
											<p>Dikirim : {{$ajuan->tgl_kirim}}</p>
										</div>
										<div class="status-ajuan">
											@if($ajuan->status === 'Sedang Diproses')
												<p>{!! $ajuan->status !!}</p>
											@elseif($ajuan->status === 'Diterima')
												<p><font color="green">{!! $ajuan->status !!}</font></p>
											@elseif($ajuan->status === 'Ditolak')
												<p><font color="red">{!! $ajuan->status !!}</font></p>
											@endif
											<p><font size="2">Waktu Perubahan Status {{$ajuan->tgl_ubah_status}}</font></p>
										</div>
										<div class="clearfix"></div>	
									</div>
								</div>
							@empty
								<div class="row grids_btm top">
									Tidak ada ajuan
								</div>
							@endforelse
					      </div> 
					    </div>
					  </div>
				</div>
			</div>
		</div>
</div>

@stop