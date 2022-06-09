@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')

<!DOCTYPE html>
<html>
  <head>
    <style>
    table {
        border: 1px solid lightgray;
    }
    table th {
        background-color: silver;
        text-align: center;
        padding: 5px;
        width: auto;
    }
    table td {
        border: 1px dotted silver;
        word-break: break-all;
        text-align: left;
    }
    </style>
  </head>

<div style="background-color: rgb(255, 255, 255);">
    <div class="container py-4 mx-5" width="100%">
        <div class="row align-items-left ">
            <!-- List Pertanyaan Warga -->
            <h4 class="card-title"><b>Histori Adminstrasi Warga</b></h4>
            <table style="width: 1000px; display: table; table-layout: fixed;" class="table table-striped table-bordered text-center table-hover table-responsive">
                <thead>
                    <tr >
                        {{--<th></th>--}}
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
                        {{--<td><button class="button-primary">Detail</td>--}}
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

@include('dashboard.layouts.footer')
