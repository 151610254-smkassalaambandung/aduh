@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<div class="panel" style="background: rgba(255,255,255,0,5);">
                <div class="panel-heading">Mangga Lebetan</div>
                <div class="panel-body">
                <form class="form-horizontal" role="form" methode="POST" action="{{ url('/register') }}">

                </form>
                 {!! Form::open(['url'=>'/register','class'=>'form-horizontal']) !!}
                 <div class="form-group{{$errors->has('nama') ? ' has-error' : ''}}">
                  {!! Form::label('name','Nama',['class'=>'col-md-4 control-label' ]) !!}                  
                <div class="col-md-6">
                  {!! Form::text('name',null,['class'=>'form-control']) !!}
                  {!! $errors->first('name','<p class="help-block">:message</p>') !!}     
                </div>
                    </div>

                 <div class="form-group{{$errors->has('email' ) ? ' has-error' : ''}}">
                {!! Form::label('email','Alamat Email',['class'=>'col-md-4 control-label' ]) !!}
                <div class="col-md-6">
                    {!! Form::email('email',null,['class'=>'form-control']) !!}
                {!! $errors->first('email','<p class="help-block">:message</p>') !!}

                </div>
                    </div>

                    <div class="form-group{{$errors->has('password' ) ? ' has-error' : ''}}">
                {!! Form::label('password','Password',['class'=>'col-md-4 control-label' ]) !!}
                <div class="col-md-6">
                    {!! Form::password('password',['class'=>'form-control' ]) !!}
                {!! $errors->first('password','<p class="help-block">:message</p>') !!}
                </div>
                    </div>

                    <div class="form-group{{$errors->has('password_confirmation' ) ? ' has-error' : ''}}">
                {!! Form::label('password_confirmation','Konfirmasi Password',['class'=>'col-md-4 control-label' ]) !!}
                <div class="col-md-6">
                    {!! Form::password('password_confirmation',['class'=>'form-control' ]) !!}
                {!! $errors->first('password_confirmation','<p class="help-block">:message</p>') !!}
                </div>
                    </div>

                       <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> Ngadamel
                    </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!!form::close() !!}
@endsection
