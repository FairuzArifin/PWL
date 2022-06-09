@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Diri PIC
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
                            <tr>
                                <td>
                                  <a href="{{route('usersedit',Auth::user()->id)}}" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                    <td> {{Auth::user()->name}}</td>
                                    <td> {{Auth::user()->nik}}</td>
                                    <td> {{Auth::user()->level}}</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
              </div>
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection