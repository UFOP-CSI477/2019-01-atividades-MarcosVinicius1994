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
        <li class="active"><a href="/">Home</a></li>

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


  <div class="col-md-12">
    <ul class="nav nav-tabs">


                               <div class="">
                                 <a href="/Paciente" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Area geral</a>
                                  <a href="/operador"class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Area Operador</button></a>
                                  <a href="/adm"class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Area Administrador</button></a>
                              </div>

    </div>




    <div class="jumbotron text-center col-mt-16">
      <h1>Clinica de analises laboratoriais</h1>
      <p>Agende já sua consulta com nossas especialidades!</p>
    </div>



    <div class="container col-mt-12">

      <a class="btn btn-primary col-mt-12" href="/MostrarProcePadrao" role="button">Procedimentos</a>
      {{-- <a class="btn btn-primary col-mt-12 " href="/procedures" role="button">Listar Procedimentos</a>
        <a class="btn btn-primary col-mt-12" href="{{ route('procedures.create') }}" role="button">Inserir</a> --}}
        {{-- <a class="btn btn-primary" href="{{ route('procedures.edit', $procedure->id) }}" role="button">Editar</a> --}}


      </div>





      </tbody>



    <!-- Conteudo --parte central //-->

    @yield('conteudo')



    <table  id="">

    </table>

  </body>
  </html>
