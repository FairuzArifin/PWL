@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')

 <!---->
 <div class="login-form-bg">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-8 ">
              {{--form--}}
              <div class="form-input-content">
                  <div class="card login-form mb-0 my-5">
                      <div class="card-body pt-5">
                          
                              <a class="text-center" href="#"> <h4>Form Adminstrasi</h4></a>
  
                          <form class="mt-5 mb-5 login-input">

                              <div class="form-group text-dark">
                                <select class="form-control"  name="jenis_kelamin" >
                                    <option value="#">Pilih Jenis Form</option>
                                    <option value="pertanyaan" name="jenis">Pertanyaan</option>
                                    <option value="permintaan" name="jenis">Permintaan</option>
                                    <option value="perngaduan" name="jenis">Pengaduan</option>
                                </select>
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" name="name" placeholder="Nama"
                                   value="{{ auth()->user()->name }}" required readonly>
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" name="nik" placeholder="No NIK" 
                                   value="{{ auth()->user()->nik }}"required readonly>
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                              </div>
  
                              <div class="form-group">
                                  <input type="text" class="form-control" name="no_hp" placeholder="Nomor Hp" required>
                              </div>

                              <div class="form-group">
                                <input type="text" class="form-control" name="Judul" placeholder="judul" required>
                              </div>

                              <div class="form-group">
                                  <p>Keterangan</p>
                                  <textarea class="px-5" name="Keterangan" cols="80%" rows="5"></textarea>
                              </div>

                               <!---Bagian PIC--->
                                <div class="form-group">
                                <input type="hidden" class="form-control" name="PIC" placeholder="PIC" required>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="jawaban" placeholder="jawaban" required>
                                </div>
                              <!--------------->

                              <button class="btn login-form__btn submit w-100 btn-success">Submit</button>
                
                          </form>
                          </div>
                      </div>
                  </div>
              </div>
              {{--AKHIR --}}
          </div>
      </div>
  </div>
</div>
{{----}}

@include('dashboard.layouts.footer')