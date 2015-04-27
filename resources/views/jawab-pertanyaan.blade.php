@extends('layout-admin')

@section('content')

<div class="container">
	<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
				@if(!is_null(Session::get('message')))            
					<div class="alert alert-success">
    					<a href="#" class="close" data-dismiss="alert">&times;</a>
    					<strong>Sukses!</strong> {!! Session::get('message') !!}
					</div>
		        @endif
				@forelse($pertanyaan as $p)
					<div class="row grids_btm top">
						<div class="grid_list">
							<div class="pertanyaan-jawaban">
							  	<h3>Pertanyaan: </h3>
								<p>{{ $p->pertanyaan_user }}</p>
								@if($p->jawaban!==null)
									 <font size="3" color="green">Sudah Terjawab</font>
								@endif
								<button class=" daftarpertanyaan"> jawab </button> 
								<a href="deletePertanyaan/{{$p->id}}">
									<button class=" hapuspertanyaan"> hapus </button>
								</a>
								<div class="formjawaban">
									<div class="pertanyaan-form"><br><br><br><br>
								  	<h4>Jawab Pertanyaan</h4>
									    {!! Form::open(array('url'=>'admin/jawabPertanyaan/'.$p->id, 'method'=>'POST')) !!}
									    	<div>
										    	<span><textarea name="jawaban">{{$p->jawaban}}</textarea></span>
										    </div>
										   <div>
										   		<span><input type="submit" value="kirim jawaban"></span>
										  </div>
									    {!! Form::close() !!}
								    </div>
								</div> 	   
				 			</div>
			 			 	<div class="clearfix"></div>
						</div>
					</div>
				@empty
					<h3><center>Tidak Ada Pertanyaan</center></h3>
				@endforelse
			</div>
	</div><!-- end blog -->
</div>
</div>

@stop