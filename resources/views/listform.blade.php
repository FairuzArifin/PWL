@extends('home.main')

@section('content')

@include('home.navbar')

<div class="content-body">

            
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
                                    </table>


@include('home.footer')