@extends('layout')

@section('content')

<style>
  
  a.fb-msg-btn{
    width: 250px;
    display: inline-block;
    font-family: inherit;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    text-align: center;
    padding: 12px 16px;
    margin: 0;
    background-color: #0084ff;
    border: 0;
    cursor: pointer;
    outline: none;
  }

  a:hover.fb-msg-btn { 
    background-color: #0268c7; 
  }

  a.whatsapp-msg-btn{
    width: 250px;
    display: inline-block;
    font-family: inherit;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    text-align: center;
    padding: 12px 16px;
    margin: 0;
    background-color: #25d366;
    border: 0;
    cursor: pointer;
    outline: none;
  }

  a:hover.whatsapp-msg-btn { 
    background-color: #128c7e; 
  }

  #contact-us {
    list-style-type: none;
  }

  #contact-us > li{
    padding: 10px;
  }

  a.call-msg-btn{
    width: 250px;
    display: inline-block;
    font-family: inherit;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    text-align: center;
    padding: 12px 16px;
    margin: 0;
    background-color: #00cccc;
    border: 0;
    cursor: pointer;
    outline: none;
  }

  a:hover.call-msg-btn { 
    background-color: #0072cf; 
  }


</style>
<div class="single-movie-template">
    <div class="img-wrapper">
    <img src="{{ asset('img/services/surprises/birthday.jpg')}}" alt="">
  </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="info-wrapper">
            <h1>Birthday Surprise</h1>
            <div class="content">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Description</h4>
                    <p>Birthday in anyone's life is so special and dear. It's the most awaited day in everyone's life. When that wait is treated with an amazing finish, it creates nothing less than a Million Dollar Moment and that birthday will be remembered for lifetime and you will be remembered as a special one forever in their life.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 cast-wrapper">
                    <h4>For enquiries</h4>
                    <ul id="contact-us">
                        <li>
                            <b><a href="/contact" class="call-msg-btn" target="_blank">Contact Us / Enquiry</a></b>
                        </li>
                        <li>
                            <b><a href="https://api.whatsapp.com/send?phone=919052282738" class="whatsapp-msg-btn" target="_blank">Message us on Whatsapp</a></b>
                        </li>
                        <li>
                          <a href="https://m.me/themilliondollarmoment/" class="fb-msg-btn" target="_blank">Message us on Facebook</a>
                        </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection