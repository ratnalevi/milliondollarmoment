@extends('layout')

@section('content')

<div class="container">
    <h1>Contact Us</h1>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @if(Session::has('message'))
        <div class="alert alert-info">
            {{Session::get('message')}}
        </div>
    @endif

    {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::label('Name') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Full Name')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('E-mail') !!}
        {!! Form::text('email', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'E-mail address')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Mobile') !!}
        {!! Form::text('mobile', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Mobile Number')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Message') !!}
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Ask your query')) !!}
    </div>

    <div class="form-group text-center">
        {!! Form::submit('Contact Us!',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>

@endsection