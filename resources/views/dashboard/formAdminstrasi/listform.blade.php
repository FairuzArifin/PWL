@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')


<div class="login-form-bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-12 ">
{{--  --}}
            <div class="container-fluid">
                <div class="row" id="populer">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- List Pertanyaan Warga -->
                                    <div class="col-6 text-left">
                                        <h4 class="card-title">List Pertanyaan Warga</h4>
                                    </div>

                                    <table class ='table table-bordered text-center'>
                                        <thead>
                                            <tr>
                                                <th>Jenis</th>
                                                <th>Pengirim</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Alamat</th>
                                                <th>Nomor Hp</th>
                                                <th>Status</th>
                                                <th>PIC</th>
                                                <th>Jawaban</th>
                                                <th>Tanggal Dibuat</th>
                                            <tr>
                                        </thead>
                                        <tbody>
                                            @foreach($forms as $form)
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>{{$form->judul}}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            <tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
           </div>
        </div>
{{--  --}}
</div>
</div>
</div>
</div>

@include('dashboard.layouts.footer')