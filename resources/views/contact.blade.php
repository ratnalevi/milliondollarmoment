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

    {!! Form::open(array('route' => 'contact_store', 'class' => 'form', 'id' => 'contact-us-form')) !!}

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
        {!! Form::label('Location') !!}
        {!! Form::text('location', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Location of Event')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Type of Event') !!}
    </div>

    <div class="form-group">
        {!! Form::select('event_type', [
               'surpise' => 'Surprise',
               'destination_surprise' => 'Destination Suprise',
               'event_planner' => 'Event Planner/Wedding',
               'candlelight_dinner' => 'Candle Light Dinner',
               'delivery' => 'Delivery',
               'pranks' => 'Pranks',
               'others' => 'Others'
           ], ['required', 'id' => 'contact-us-event-type', 'placeholder' => 'Select type of event', 'class' => 'form-control'] )
        !!}
    </div>

    <div class="form-group">
        {!! Form::label('Type of Surpise') !!}
    </div>

    <div class="form-group">
        {!! Form::select('surprise_type', [
               'birthday' => 'Birthday',
               'wedding_anniversary' => 'Wedding / Anniversary',
               'bon_voyage' => 'Bon Voyage',
               'proposal' => 'Proposal',
               'asking_sorry' => 'Asking Sorry',
               'miss_you' => 'Miss You',
               'get_well_soon' => 'Get Well Soon',
               'others' => 'Others'
           ], ['required', 'id' => 'contact-us-surprise-type'] )
        !!}
    </div>

    <div class="form-group">
        {!! Form::label('Date of Event') !!}
    </div>

    <div class="form-group">
        {!! Form::date('event_date', \Carbon\Carbon::now()); !!}
    </div>

    <div class="form-group">
    {!! Form::label('Number of Guests') !!}
        {!! Form::input('guest_count', 'amount', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('How did you hear about us ?') !!}
    </div>

    <div class="form-group">
        {!! Form::select('reach_factor', [
               'website' => 'Our Website',
               'friend' => 'From a Friend',
               'facebook' => 'Facebook',
               'youtube' => 'Youtube',
               'web_search' => 'Web Search',
               'others' => 'Others'
           ])
        !!}
    </div>

    <div class="form-group">
        {!! Form::label('Additional Information') !!}
        {!! Form::textarea('message', null,
            array('class'=>'form-control',
                  'placeholder'=>'Tell us more about your requirement')) !!}
    </div>

    <div class="form-group text-center">
        {!! Form::submit('Contact Us!',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}
</div>

@endsection