<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Authentication App With Laravel 4</title>
    {{ HTML::script('mainpage/js/jquery.min.js')}}
      {{ HTML::script('mainpage/js/jquery.scrollTo-min.js')}}
        {{ HTML::script('mainpage/js/jquery.localscroll-min.js')}}
         {{ HTML::script('mainpage/js/jquery.lightbox-0.5.js')}}
         {{ HTML::script('mainpage/js/jquery.min.js')}}
        {{ HTML::style('mainpage/css/tooplate_style.css')}}
         {{ HTML::style('mainpage/css/jquery.lightbox-0.5.css')}}
  </head>
 
  <body>
    <div id="tooplate_wrapper">
  <span id="top"></span>
  <div id="tooplate_header">
      <div id="site_title"><h1><a rel="nofollow" href="http://www.tooplate.com">Free Website Templates</a></h1></div>
        <div id="tooplate_menu">
  <ul>
               <li>{{ HTML::link('register', 'Register') }}</li>  
                    <li>{{ HTML::link('login', 'Login') }}</li>   
            </ul> 
  </body>
</html>