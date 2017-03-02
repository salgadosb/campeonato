<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Karate-DO</title>
     <!-- Latest compiled and minified CSS -->
{!!Html::style('css/bootstrap.min.css')!!}


<!-- Latest compiled and minified JavaScript -->
{!!Html::script('js/jquery.min.js')!!}

{!!Html::script('js/bootstrap.min.js')!!}
   <style>
    body{
      padding-top: 60px;
    }
   </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          @if(Auth::guest())
              <a class="navbar-brand" href="#">Project name</a>
          @else
              <a class="navbar-brand" href="#">{{ Auth::user()->nombre }}</a>
              
          @endif
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Iniciar Sesión</a></li>
            <li><a href="#">Registrarse</a></li>
            <li><a href="#">Cerrar Sesión</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      @yield('content')

    </div><!-- /.container -->
  </body>
</html>
