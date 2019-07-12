<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Sistema Acadêmico')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <nav class="navbar navbar-inverse ">
    <div class="container-fluid">

      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>


</head>
<body>



  <div class="col-md-12">
    <ul class="nav nav-tabs">


                               <div class="">
                                 <a href="/users/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Novo paciente</a>
                                  <a href="/tests/create"class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Solicitação de exames</button></a>
                                  <a href=""class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Lista de exames solicitados</button></a>
                              </div>

    </div>

    </body>
    </html>
