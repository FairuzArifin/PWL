@extends('layout.main')

@section('content')

@include('layout.navbar')

<div class="container contact">
	<div class="row">
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
                <form class = "form-control">
                    <span class="contact100-form-title">Form Pertanyaan</span>
				  <label class="control-label col-sm-2" >Nama</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda" name="name" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" >NIK</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="nik" placeholder="Masukkan NIK Anda" name="nik" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Jenis Kelamin</label>
				  <div class="col-sm-10">
                  <select class="form-select " name="jenis_kelamin">
                        <option>Please chooses</option>
                        <option>Laki - Laki</option>
                        <option>Perempuan</option>
                    </select>
				  </div>
				</div>

                <div class="form-group">
				  <label class="control-label col-sm-2" >Alamat</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat" required>
				  </div>
				</div>

                <div class="form-group">
				  <label class="control-label col-sm-2" >Nomor Hp</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="no_hp" placeholder="Masukkan Alamat Anda" name="no_hp" required>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Pertanyaan</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="pertanyaan" name="pertanyaan"></textarea>
				  </div>
				</div>

				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-">Submit</button>
				  </div>
                    </form>
				</div>
			</div>
		</div>
    </div>
</div>

@include('layout.footer')