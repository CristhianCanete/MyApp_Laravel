@extends('connect.master')
@section('content_connect')
<div class="box">
    <div class="in">
        <div class="logo">
            <img src="{{url('/static/images/buy.png')}}" alt="">
        </div>
        <h3>Bienvenido a {{ Config('cms.app_name')}} 🛒!</h3>
        <div class="form mtop16">
            {!! Form::open(['url' => '/', 'id' => 'form_connect_login']) !!}
            {!! Form::hidden('autocomplete', null, ['class' => 'autocomplete']) !!}

            <label for="email">Correo electónico:</label>
            {!! Form::text('email', null, ['class' => 'disableac']) !!}

            <label for="email">Contraseña:</label>
            {!! Form::password('email', null, ['class' => 'disableac']) !!}

            {!! Form::submit('Ingresar', ['class' => 'mtop16']) !!}

            {!! Form::close() !!}
        </div>

    </div>
</div>
@endsection