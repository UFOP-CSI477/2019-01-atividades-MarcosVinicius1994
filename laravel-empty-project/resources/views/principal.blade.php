<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Acadêmico')</title>
  </head>
  <body>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Exibir mensagens -> campo: mensagem // -->
@if(Session::has('mensagem'))
<p><strong>{{ Session::get('mensagem') }}</strong></p>
@endif


<!--link - menu lateral//-->



<ul>
  <li><a href="">Home</a>
    <li><a href="/welcome">About</a></li>
  </li>
  <li><a href="/alunos/listar">Listar</a></li>
  <li><a href="/estados">Estados</a></li>

</ul>

<!-- Conteudo --parte central //-->

@yield('conteudo')



<table  id="">

</table>

  </body>
</html>
