 <!DOCTYPE html>
<html lang="en">
  <head>
 {{ HTML::style('demopage/css/bootstrap.css')  }}
{{ HTML::style('demopage/css/bootstrap.css.map') }}
{{ HTML::style('demopage/css/bootstrap.min.css') }}
{{ HTML::style('demopage/css/bootstrap-theme.css') }}
{{ HTML::style('demopage/css/bootstrap-theme.css.map') }}
{{ HTML::style('demopage/css/bootstrap-theme.min.css') }}
{{ HTML::script('demopage/js/bootstrap.js') }}
{{ HTML::script('demopage/js/bootstrap.min.js') }}
<style>
        table form { margin-bottom: 0; }
        form ul { margin-left: 0; list-style: none; }
        .error { color: red; font-style: italic; }
        body { padding-top: 20px; }
    </style>
</head>
<body>

<div class="container">
    @if (Session::has('message'))
    <div class="flash alert">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif

    @yield('main')
</div>
</body>
</html>