@extends('master')
@section('content')
{{ Form::open(array("URL::route('post-add-get ')")) }}
<fieldset class="boxBody">
  <div class="fields"> 
      {{ Form::label('email', 'Enter username') }}
      {{ Form::text('email') }}

      @if($errors->has('email'))
        <p class="error">{{ $errors->first('email') }}</p>
      @endif
    </div>
     <div class="fields"> 
      {{ Form::label('password', 'Password') }}
      {{ Form::password('password') }}
      @if($errors->has('password'))
        <p class="error">{{ $errors->first('password') }}</p>
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