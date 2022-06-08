@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @if($form->id==null)
        Untuk Sementara Tidak Ada Pertanyaan
        @else
        Update Pertanyaan Warga
        @endif
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i>Form Pertanyaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              
              <div class="box-body ">
                @if($form->id==null)
                    {!! Form::model($form, ['route' => 'formstore'])!!}
                @else
                {!! Form::model($form, [
                  'method' => 'PUT',
                  'route' => ['formupdate', $form->id]])!!}
                @endif

                    <div class="form-group {{$errors->has('judul')?'has-error' : ''}}">
                        {!! Form::label('judul')!!}
                        {!! Form::text('judul', null, ['class' => 'form-control' ,'disabled',])!!}
                    </div>
                    @if($errors->has('judul'))
                    <span class="help-block">{{$errors->first('judul')}}</span>
                    @endif
                    
                    <div class="form-group {{$errors->has('deskripsi')?'has-error' : ''}}">
                        {!! Form::label('deskripsi')!!}
                        {!! Form::textarea('deskripsi', null, ['class' => 'form-control','disabled',])!!}
                    </div>
                    @if($errors->has('deskripsi'))
                    <span class="help-block">{{$errors->first('deskripsi')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('status')?'has-error' : ''}}">
                    {!! Form::label('Status : ')!!}
                    {!! Form::select('status', array('Diproses','Selesai'), ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('status'))
                    <span class="help-block">{{$errors->first('status')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('PIC')?'has-error' : ''}}">
                      {!! Form::label('PIC', 'Diteruskan ke : ') !!}
                      {!! Form::text('PIC', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('PIC'))
                    <span class="help-block">{{$errors->first('PIC')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('jawaban')?'has-error' : ''}}">
                      {!! Form::label('jawaban')!!}
                      {!! Form::textarea('jawaban', null, ['class' => 'form-control','disabled'])!!}
                    </div>
                    @if($errors->has('jawaban'))
                    <span class="help-block">{{$errors->first('jawaban')}}</span>
                    @endif

                    <div class="form-group">
                        {!! Form::submit('Save', ['class' => 'form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                    
            
              </div>
              <!-- /.box-body -->
              
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