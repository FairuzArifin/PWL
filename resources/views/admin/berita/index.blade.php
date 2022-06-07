@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Berita
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Berita dan Informasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="pull-left">
                  <a href="{{route('beritacreate')}}" class="btn btn-success">Tambahkan Berita Baru</a>
                </div>
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
                                <td>Opsi</td>
                                <td>Judul</td>
                                <td>Penulis</td>
                                <td>Tanggal</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>
                                  <a href="{{route('beritaedit',$post->id)}}" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('beritadelete',$post->id)}}" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->author->name}}</td>
                                    <td>{{$post->created_at}}</td>
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
                        {{$posts->links("pagination::bootstrap-4")}}
                    </ul>
                  </div>
                  <div class="pull-right">
                      <small> Jumlah Berita : {{$posts->count()}} dari {{$posts->total()}}</small>
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