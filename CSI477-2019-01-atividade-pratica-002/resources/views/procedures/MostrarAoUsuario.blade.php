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

  <!-- Exibir mensagens -> campo: mensagem // -->
  @if(Session::has('mensagem'))
    <p><strong>{{ Session::get('mensagem') }}</strong></p>
  @endif


  <!--link - menu lateral//-->


  <div class="ml-10">
    <ul class="nav nav-tabs">

      <div class="">
        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Area geral</a>
         <a href="/operador"class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Area Paciente</button></a>
         <a href="/adm"class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Area Administrador</button></a>
     </div>




    <div class="jumbotron text-center">
      <h1>Clinica de analises laboratoriais</h1>
      <p>Agende já sua consulta com nossas especialidades!</p>
    </div>



    <div class="container">
      <h2>Lista de exames disponiveis:</h2>
      <p>A lista pode ser atualizada trimestralmente!!!</p>

      <a class="btn btn-primary" href="/MostrarProcePadrao" role="button">Procedimentos</a>


      <div class="container">
    <div class="table-responsive">

    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Código</th>
          <th>Preço</th>
          <th>Data de criação</th>
          <th>Data de atualização</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($procedures as $e)
          <tr>
            <td>{{ $e->name}}</td>
            <td>{{ $e->id }}</td>
            <td>{{ $e->price }}</td>
            <td>{{ $e->created_at }}</td>
            <td>{{ $e->update_at }}</td>
            <td><a class="btn btn-primary" href="/home"role="button">Solicitar.</a></td>
            <td><a class="btn btn-primary"href="/"role="button">voltar</a></td>
</tr>
@endforeach
      </tbody>
    </table>
    </div>
    </div>


      </div>








    <!-- Conteudo --parte central //-->

    @yield('conteudo')



    <table  id="">

    </table>

  </body>
  </html>
