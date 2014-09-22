
<html>
    <head>
        {{ HTML::script('login/js/index.js')}}
        {{ HTML::style('login/css/reset.css')}}
        {{ HTML::style('login/css/style.css')}}
    </head>


<!-- <body>

  <div class="wrap">
    <div class="avatar">
      <img src="http://cdn.ialireza.me/avatar.png">
    </div>
    
<?php //echo Form::open(array('url' => '/valid', 'class' => 'box login')); ?>
    
     {{ Form::text('username','',array('placeholder'=>'username'))}}
    <div class="bar">
      <i></i>
    </div>
    {{ Form::text('password','',array('placeholder'=>'password'))}}
    
    {{ Form::submit('login')}}

       

    {{ Form::close()  }}


  

</body> -->
<?php //echo Form::open(array('url' => 'post-add-post', 'class' => 'box login')); ?>
@extends('master')
@section('content')
{{ Form::open(array("URL::route('postadd')")) }}
<fieldset class="boxBody">
  <div class="fields"> 
      {{ Form::label('fname', 'Enter First Name') }}
      {{ Form::text('fname') }}

      @if($errors->has('fname'))
        <p class="error">{{ $errors->first('fname') }}</p>
      @endif
    </div>
     <div class="fields"> 
      {{ Form::label('lname', 'Enter Last Name') }}
      {{ Form::text('lname') }}

      @if($errors->has('lname'))
        <p class="error">{{ $errors->first('lname') }}</p>
      @endif
    </div>
  <div class="fields"> 
      {{ Form::label('email', 'E-Mail Address') }}
      {{ Form::text('email') }}

      @if($errors->has('email'))
        <p class="error">{{ $errors->first('email') }}</p>
      @endif
    </div>
  <div class="fields"> 
      {{ Form::label('password', 'Password') }}
      {{ Form::text('password') }}
      @if($errors->has('password'))
        <p class="error">{{ $errors->first('password') }}</p>
      @endif
    </div>  
    <div class="fields"> 
      {{ Form::label('cpassword', 'Confirm Password') }}
      {{ Form::text('cpassword') }}
      @if($errors->has('cpassword'))
        <p class="error">{{ $errors->first('cpassword') }}</p>
      @endif
    </div>  
<div class="fields"> 
      <label>&nbsp;</label>
      {{ Form::submit('Submit',array('class'=>'button')) }}
    </div>      
    {{ Form::close()}}
  </div>
<footer id="main">
</footer>
</body>
</html>

</html>


