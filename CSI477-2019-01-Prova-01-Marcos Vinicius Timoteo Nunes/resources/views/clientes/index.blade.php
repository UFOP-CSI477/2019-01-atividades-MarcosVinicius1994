@extends('geral')

@section('titulo', 'Exibir clientes')

@section('conteudo')

  {{--
  Pagina para exibir o relatorio de clientes de forma arcendente por nome --}}
  <div class="container">
    <div class="table-responsive">

      <table class="table">
        <thead>
          <tr>
            <th>Id do cliente</th>
            <th>Nome do cliente</th>
          </tr>

        </thead>
        <tbody>
          @foreach ($clientes as $c)
            <tr>
              <td>{{ $c->id }}</td>
              <td>{{  $c->nome}}</td>
              {{-- <td><a href="{{ route('procedures.show', $e->id) }}">{{ $e->name }}</a></td> --}}

            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>






@endsection
