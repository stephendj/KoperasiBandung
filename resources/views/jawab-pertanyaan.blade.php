@extends('layout-admin')

@section('content')

<div class="container">
	<div class="blog"><!-- start blog -->
		<div class="row">
			<div class="col-md-12 blog_left">
					<div class="row grids_btm top">
						<div class="grid_list">	
						@foreach($pertanyaan as $p)
							<div class="row grids_btm top">
									<div class="pertanyaan-jawaban">
									  	<h3>Pertanyaan: </h3>
										<p>{{$p->pertanyaan_user}}</p>
										<button class="daftarpertanyaan">jawab</button>  
										
										<a href="{{URL::to('admin/deletePertanyaan/'.$p->id_pertanyaan)}}" >
											<button class="hapuspertanyaan">hapus</button>
										</a>

										<div class="formjawaban">
												<div class="pertanyaan-form"><br><br><br><br><br><br>
											  	<h4>Jawab Pertanyaan</h4>
												    <form method="PUT" action="jawabPertanyaan/{{$p->id_pertanyaan}}">
												    	<div>
													    	<span>isi jawaban</span>
													    	<span><textarea name="userMsg">{{$p->jawaban}} </textarea></span>
													    </div>
													   <div>
													   		<span><input type="submit" value="kirim jawaban"></span>
													  </div>
												    </form>
											    </div>
											</div> 	   
						 			</div>
						 		</div>
						  <div class="clearfix"></div>

						@endforeach
					</div>
					

					</div><!-- end blog -->
</div>
</div>

@stop