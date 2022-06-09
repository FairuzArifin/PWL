@extends('layouts.backend.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @if($user->id==null)
        Buat User Baru
        @else
        Update Data User
        @endif
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i>Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              
              <!-- /.box-header -->
              
              <div class="box-password ">
                @if($user->id==null)
                    {!! Form::model($user, ['route' => 'usersstore'])!!}
                @else
                {!! Form::model($user, [
                  'method' => 'PUT',
                  'route' => ['usersupdate', $user->id]])!!}
                @endif

                    <div class="form-group {{$errors->has('nik')?'has-error' : ''}}">
                        {!! Form::label('nik')!!}
                        {!! Form::text('nik', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('nik'))
                    <span class="help-block">{{$errors->first('nik')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('name')?'has-error' : ''}}">
                        {!! Form::label('name')!!}
                        {!! Form::text('name', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('name'))
                    <span class="help-block">{{$errors->first('name')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('email')?'has-error' : ''}}">
                        {!! Form::label('email')!!}
                        {!! Form::text('email', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('email'))
                    <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
                    
                    <div style="visibility: hidden">
                    <div class="form-group {{$errors->has('password')?'has-error' : ''}}">
                        {!! Form::label('password')!!}
                        {!! Form::text('password', null, ['class' => 'form-control'])!!}
                    </div>
                    @if($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                    @endif

                    <div class="form-group {{$errors->has('level')?'has-error' : ''}}">
                      {!! Form::label('Level : ')!!}
                      <select name="level">
                        <option value="Admin">Admin</option>
                        <option value="PIC" selected>PIC</option>
                        <option value="Warga">Warga</option>
                      </select>
                      </div>
                      @if($errors->has('level'))
                      <span class="help-block">{{$errors->first('level')}}</span>
                      @endif
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Save', ['class' => 'form-control'])!!}
                    </div>
                    {!! Form::close()!!}
              </div>
              <!-- /.box-password -->
              
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