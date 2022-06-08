@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List User
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="pull-left">
                  <a href="{{route('usercreate')}}" class="btn btn-success">Tambahkan User Baru</a>
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
                                <td>Nama</td>
                                <td>NIK</td>
                                <td>Level</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                  <a href="{{route('useredit',$user->id)}}" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('userdelete',$user->id)}}" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->nik}}</td>
                                    <td>{{$user->level}}</td>
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
                        {{$users->links("pagination::bootstrap-4")}}
                    </ul>
                  </div>
                  <div class="pull-right">
                      <small> Jumlah User : {{$users->count()}} dari {{$users->total()}}</small>
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