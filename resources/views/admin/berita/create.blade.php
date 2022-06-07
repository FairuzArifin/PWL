@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @if($post->id==null)
        Berita Baru
        @else
        Update Berita
        @endif
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i>Berita dan Informasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              
              <div class="box-body ">
                @if($post->id==null)
                    {!! Form::model($post, ['route' => 'beritastore'])!!}
                @else
                {!! Form::model($post, [
                  'method' => 'PUT',
                  'route' => ['beritaupdate', $post->id]])!!}
                @endif

                    <div class="form-group {{$errors->has('title')?'has-error' : ''}}">
                        {!! Form::label('title')!!}
                        {!! Form::text('title', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('title'))
                    <span class="help-block">{{$errors->first('title')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('slug')?'has-error' : ''}}">
                        {!! Form::label('slug')!!}
                        {!! Form::text('slug', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('slug'))
                    <span class="help-block">{{$errors->first('slug')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('excerpt')?'has-error' : ''}}">
                        {!! Form::label('excerpt')!!}
                        {!! Form::textarea('excerpt', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('excerpt'))
                    <span class="help-block">{{$errors->first('excerpt')}}</span>
                    @endif
                    
                    <div class="form-group {{$errors->has('body')?'has-error' : ''}}">
                        {!! Form::label('body')!!}
                        {!! Form::textarea('body', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('body'))
                    <span class="help-block">{{$errors->first('body')}}</span>
                    @endif

                    <div class="form-group">
                        {!! Form::submit('Save', ['class' => 'form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                    <script>
                      tinymce.init({
                        selector: 'textarea.form-control',
                        width: 900,
                        height: 300
                      });
                    </script>
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