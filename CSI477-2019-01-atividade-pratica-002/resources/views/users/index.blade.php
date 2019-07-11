<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Sistema Acadêmico')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">LaboClin</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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


    <div class="jumbotron text-center">
      <h1>Clinica de analises laboratoriais</h1>
      <p>Agende já sua consulta com nossas especialidades!</p>
    </div>



    <div class="container">
      {{-- <a class="btn btn-primary" href="/MostrarProcePadrao" role="button">Procedimentos</a> --}}
      <a class="btn btn-primary col-mt-12" href="{{ route('users.create') }}" role="button">Inserir</a></td>
                    <td>    <a  class="btn btn-primary" href="/adm" role="button ">Voltar</a></td>


      <div class="container">
    <div class="table-responsive">

    <table class="table">
      <thead>
        <tr>
          <th>Id do paciente</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Tipo de usuario</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($usuarios as $a)
          {{-- @if ($a->id == Auth::user()->id) --}}
            <tr>
              <td>{{ $a->id }}</td>
              <td>{{ $a->name}}</td>
              <td>{{ $a->email }}</td>
              <td>{{ $a->type}}</td>
              <td><a class="btn btn-primary" href="{{ route('users.edit', $a->id) }}" role="button">Editar.</a></td>

              <td><a class="btn btn-primary"href="{{ route('users.show', $a->id) }}"role="button">Exibir</a></td>

              <td> <td> <form method="post" action="{{ route('users.destroy', $a->id) }}" onsubmit="return confirm('Confirma exclusão do paciente?');" >

                 @csrf
                 @method('DELETE')
                 <input type="submit" value="Excluir">
               </form></td>
            </tr>

          {{-- @endif --}}
        @endforeach

      </tbody>
    </table>
    </div>
    </div>









    <!-- Conteudo --parte central //-->

    @yield('conteudo')



    <table  id="">

    </table>

  </body>
  </html>
