@extends('master')
@section('content')
{{ Form::open(array("URL::route('login')")) }}
<fieldset class="boxBody">
  <div class="fields"> 
      {{ Form::label('uname', 'UserName') }}
      {{ Form::text('uname') }}

      @if($errors->has('uname'))
        <p class="error">{{ $errors->first('uname') }}</p>
      @endif
    </div>
     <div class="fields"> 
      {{ Form::label('pswd', 'Password') }}
      {{ Form::text('pswd') }}
      @if($errors->has('pswd'))
        <p class="error">{{ $errors->first('pswd') }}</p>
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