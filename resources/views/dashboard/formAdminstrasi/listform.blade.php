@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')


{{--  --}}

<div style="background-color: rgb(9, 255, 0);">
    <div class="container py-5">
      <div class="row align-items-center py-5">
          
                                    <!-- List Pertanyaan Warga -->
                                
                                        <h4 class="card-title">Histori Adminstrasi Warga</h4>
                                    

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
{{--  --}}

@include('dashboard.layouts.footer')