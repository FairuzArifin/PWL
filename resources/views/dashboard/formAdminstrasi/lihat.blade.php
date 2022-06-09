@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')

 <!---->
 <div class="login-form-bg">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-8 ">
              {{--form--}}
              <div class="form-input-content">
                  <div class="card login-form mb-0 my-5">
                      <div class="card-body pt-5">
                        <button type="button" id="sidebarCollapse" class="btn btn-info" onclick="history.back()">Kembali</button>
                          
                          <h4 class="text-center">Form Adminstrasi</h4>
  
                            {!! Form::model($form, [
                              'method' => 'PUT',
                              ])!!}
            
                                <div class="form-group {{$errors->has('jenis')?'has-error' : ''}}">
                                  {!! Form::label('jenis')!!}
                                  {!! Form::text('jenis', null, ['class' => 'form-control' ,'disabled',])!!}
                                </div>
                                @if($errors->has('jenis'))
                                  <span class="help-block">{{$errors->first('jenis')}}</span>
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
                                  {!! Form::label('status') !!}
                                  {!! Form::text('status', null, ['class' => 'form-control', 'disabled'])!!}
                                </div>
                                @if($errors->has('status'))
                                <span class="help-block">{{$errors->first('status')}}</span>
                                @endif
            
                                <div class="form-group {{$errors->has('PIC')?'has-error' : ''}}">
                                  {!! Form::label('PIC', 'Diteruskan ke : ') !!}
                                  {!! Form::text('PIC', null, ['class' => 'form-control', 'disabled'])!!}
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
            
                                {!! Form::close()!!}
                
                          </form>
                          </div>
                      </div>
                  </div>
              </div>
              {{--AKHIR --}}
          </div>
      </div>
  </div>
</div>
{{----}}

@include('dashboard.layouts.footer')