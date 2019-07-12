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
  <div class="container">
<div class="table-responsive">

  <h1>Usuario administrador</h1>
<table class="table">
  <thead>
    <tr>
      <th>Id do Paiente</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Tipo de usuario</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($admin as $a)
      @if ($a->id == Auth::user()->id)
        <tr>
          <td>{{ $a->id }}</td>
          <td>{{ $a->name}}</td>
          <td>{{ $a->email }}</td>
          <td>{{ $a->type}}</td>

        </tr>

      @endif
    @endforeach

  </tbody>
</table>
</div>
</div>

<div class="btn-group col-md-12" role="group" aria-label="Exemplo básico ">
  <a class="btn btn-primary col-md-12" href="{{route('procedures.index')}}" role="button">Editar Procedimento</a>
  <a class="btn btn-primary col-md-12" href="{{route('users.index')}}" role="button">Editar Usuario</a>
  <a class="btn btn-primary col-md-12" href="{{route('tests.index')}}" role="button">Editar Teste</a>
  {{-- <a class="btn btn-primary col-md-12" href="{{route('tests.index')}}" role="button">Editar testes</a> --}}
  {{-- <a class="btn btn-primary" href="{{route('procedures.index')}}" role="button">Editar Procedimento</a>Editar usuario</a> --}}
</div>



    @yield('conteudo')


</body>
</html>
