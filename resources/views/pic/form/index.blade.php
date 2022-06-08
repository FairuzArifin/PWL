@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Pertanyaan Warga
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Form Pertanyaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h1>Halaman List Pertanyaan Warga</h1>
              </div>
              <!-- /.box-header -->
              <div class="box-body ">

                @if(session('message'))
                <div class="alert alert-info">
                  {{session('message')}}
                </div>
                @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Action</td>
                                <td>Judul</td>
                                <td>Pengirim</td>
                                <td>Status</td>
                                <td>Ditangani Oleh</td>
                                <td>Jawaban</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($forms as $form)
                            <tr>
                                <td>
                                  <a href="{{route('formedit',$form->id)}}" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('formdelete',$form->id)}}" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                    <td>{{$form->judul}}</td>
                                    {{-- <td>{{$form->author->name}}</td> --}}
                                    <td>{{$form->name}}</td>
                                    <td>{{$form->status}}</td>
                                    <td>{{$form->PIC}}</td>
                                    <td>{{$form->jawaban}}</td>
                                    <td>{{$form->created_at}}</td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <div class="pull-left">
                    <ul class="pagination no-margin">
                        {{$forms->links("pagination::bootstrap-4")}}
                    </ul>
                  </div>
                  <div class="pull-right">
                      <small> Jumlah Pertanyaan : {{$forms->count()}} dari {{$forms->total()}}</small>
                  </div>
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection