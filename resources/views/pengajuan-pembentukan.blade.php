@extends('layout-user')

@section('content')

	<div class="container">
		<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
				<div class="company_ad">
				     	<h2>Syarat Pengajuan Pembentukan Koperasi:</h2>
      					 <p> Untuk Koperasi selain Koperasi Simpan Pinjam  : </p>
						 <p>1. Dua rangkap Salinan Akta Pendirian koperasi dari notaris (NPAK).</p>
						 <p>2. Berita Acara Rapat Pendirian Koperasi.</p>
						 <p>3. Daftar hadir rapat pendirian koperasi</p>
						 <p>4. Foto Copy KTP Pendiri (urutannya disesuaikan dengan daftar hadir agar mempermudah pd saat verifikasi).</p>
						 <p>5. Kuasa pendiri (Pengurus terpilih) untuk mengurus pengesahan pembentukan koperasi.</p>
						 <p>6. Surat Bukti tersedianya modal yang jumlahnya sekurang;kurangnya sebesar simpanan pokok dan simpanan wajib yang wajib dilunasi para pendiri.</p>
						 <p>7. Rencana kegiatan usaha koperasi minimal tiga tahun kedepan dan Rencana Anggaran Belanja dan Pendapatan Koperasi.</p>
						 <p>8. Daftar susunan pengurus dan pengawas.</p>
						 <p>9. Daftar Sarana Kerja Koperasi.</p>
						 <p>10. Surat pernyataan tidak mempunyai hubungan keluarga antara pengurus.</p>
						 <p>11. Struktur Organisasi Koperasi. </p>
						 <p>12. Surat Pernyataan Status kantor koperasi dan bukti pendukungnya</p>
						 <p>13. Dokumen lain yang diperlukan sesuai dengan peraturan perundang-undangan</p>
						 <p>Tambahan syarat untuk pendirian Koperasi Simpan Pinjam : </p>
						 <p>1. Surat bukti penyetoran modal sendiri pada awal pendirian, itu berupa deposito pada bank pemerintah atas nama menteri negara koperasi dan umkm. </p>
						 <p>2. Kelengkapan administrasi organisasi dan pembukuan usp yang dikelola secara kusus dan terpisah dari pembukuan koperasinya.</p>
						 <p>3. Nama dan riwayat hidup pengurus dan pengawas </p>
						 <p>4. Surat perjanjian kerja antara pengurus koperasi dengan pengelola USP koperasi</p>
						 <p>5. Nama dan riwayat hidup calon pengelola yang dilengkapi dengan beberapa poin berikut seperti bukti telah mengikuti pelatihan atau magang usaha simpan pinjam koperasi, surat keterangan berkelakuan baik atau SKCK, surat pernyataan tidak mempunyai hubungan sedarah dengan pengurus dan pengawas, dan terakhir adalah surat pernyataan pengelola tentang kesediaannya untuk bekerja secara purna waktu. </p>
						 <p>6. Permohonan ijin menyelenggarakan usaha simpan pinjam </p>
						 <p>7. Menyediakan surat pernyataan bersedia untuk diperiksa dan dinilai kesehatan USP koperasinya oleh pejabat yang berwenang. Info lebih detail, dapat anda lihat di situs Kementerian Negara Koperasi dan UKM.</p>
				   	
			   	</div>
				</div>				
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Form Pengajuan Pembentukan Koperasi</h2>
					  	@if(!is_null(Session::get('message')))            
	    					<div class="alert alert-success">
	        					<a href="#" class="close" data-dismiss="alert">&times;</a>
	        					<strong>Sukses!</strong> {!! Session::get('message') !!}
	    					</div>
				        @endif
				        @if(!is_null(Session::get('messagefail')))
				        	<div class="alert alert-error">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Error!</strong> {!! Session::get('messagefail') !!}
							</div>
						@endif
					    {!! Form::open(array('url'=>'ajuanbentuk', 'method'=>'POST', 'files'=>true)) !!}
					    	<div>
						    	<span>Nomor Kartu Tanda Penduduk</span>
						    	<span>{!! Form::text('id_pengaju', Input::old('id_pengaju'), array('class' => 'form-control', 'placeholder' => 'cth: 1923298928329')) !!}<br>{!! "<div id=\"alert\">".$errors->first('id_pengaju')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Email</span>
						    	<span>{!! Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'cth: example@gmail.com')) !!}<br>{!! "<div id=\"alert\">".$errors->first('email')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Nama Koperasi</span>
						    	<span>{!! Form::text('nama_koperasi', Input::old('nama_koperasi'), array('class' => 'form-control', 'placeholder' => 'cth: Koperasi Sangat Maju')) !!}<br>{!! "<div id=\"alert\">".$errors->first('nama_koperasi')."</div>" !!}</span>
						    </div>
						    <div>
						    	<span>Jenis Koperasi</span>
						    	<span>
						    		<select name="jenis_koperasi">
									  <option value="Produksi">Produksi</option>
									  <option value="Konsumsi">Konsumsi</option>
									  <option value="Simpan Pinjam">Simpan Pinjam</option>
									  <option value="Serba Usaha">Serba Usaha</option>
									</select>
						    	</span>
						    </div>
						    <div>
						     	<span>Upload dokumen .zip/.rar</span>
						    	<span><input type="file" name="file" accept=".zip, .rar">{!! "<div id=\"alert\">".$errors->first('file')."</div>" !!}</span>
						    </div>
						   <div>
						   		<span><input type="submit" value="buat koperasi"></span>
						  </div>
					    {!! Form::close() !!}
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>

@stop