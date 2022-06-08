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
                                        <h4 class="card-title">Histori Adminstrasi Warga</h4>
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
                                                <td>{{$form->jenis}}</td>
                                                <td>{{$form->name}}</td>
                                                <td>{{$form->judul}}</td>
                                                <td>{{$form->deskripsi}}</td>
                                                <td>{{$form->alamat}}</td>
                                                <td>{{$form->no_hp}}</td>
                                                <td>{{$form->status}}</td>
                                                <td>{{$form->PIC}}</td>
                                                <td>{{$form->jawaban}}</td>
                                                <td>{{$form->created_at}}</td>
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