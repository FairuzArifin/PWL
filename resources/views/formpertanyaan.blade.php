@extends('layout.main')

@section('content')

@include('layout.navbar')

        <!---->
        <div class="login-form-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 ">
                        {{--form--}}
                        <div class="form-input-content">
                            <div class="card login-form mb-0 my-5">
                                <div class="card-body pt-5">
                                    
                                        <a class="text-center" href="#"> <h4>Form Pertanyaan</h4></a>
            
                                    <form class="mt-5 mb-5 login-input">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Nama" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nik" placeholder="No NIK" required>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="jenis_kelamin" >
                                                <option value="#">Jenis Kelamin</option>
                                                <option value="laki" name="jenis_kelamin">Laki - laki</option>
                                                <option value="perempuan" name="jenis_kelamin">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="no_hp" placeholder="Nomor Hp" required>
                                        </div>

                                        <div class="form-group">
                                            <p>Pertanyaan</p>
                                            <textarea class="px-5" name="deskripsi_pertanyaan" cols="80%" rows="10"></textarea>
                                        </div>

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


@include('layout.footer')