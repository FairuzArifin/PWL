@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman PIC
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <h3>Ini adalah Halaman PIC</h3>
                    <p class="lead text-muted">Halo PIC {{Auth::user()->name}}, Selamat Datang</p>

                    <h4>Pilihan</h4>
                    <p><a href="{{route('usersindex')}}" class="btn btn-primary">Edit Akun </a></p>
                    <p><a href="{{route('formsindex')}}" class="btn btn-primary">List Pertanyaan</a></p>
              </div>
              <!-- /.box-body -->
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