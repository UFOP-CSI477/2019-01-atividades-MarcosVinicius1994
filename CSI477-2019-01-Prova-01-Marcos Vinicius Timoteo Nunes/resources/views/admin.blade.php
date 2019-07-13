<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Sistema Acadêmico')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{--
  Pagina principal do administrador --}}
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Aplicação Transações</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Registrar</a></li>
      </ul>
    </div>
  </nav>


</head>
<body>

  @if(Session::has('mensagem'))
    <p><strong>{{ Session::get('mensagem') }}</strong></p>
  @endif

  <div class="ml-10">
    <ul class="nav nav-tabs">

      <li class="nav-item">
        <a class="btn btn-primary" href="/InclusaoTipos"class="nav-link">Inclusão de tipos:</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="/InclusaoClientes">Inclusão de clientes:</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="/RelatoTipos">Relatorio de transações:</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="/RelatoTransf">Relatorio de transações de clientes:</a>
      </li>
      <li class="nav-item">
        <a  class="btn btn-primary"href="/VoltarADM">Voltar:</a>
      </li>
      <li clas="nav-item">
        <a class="dropdown-item" href="{{ route('logout') }}"
      </li>
    </div>


    @yield('conteudo')





  </body>
  </html>
