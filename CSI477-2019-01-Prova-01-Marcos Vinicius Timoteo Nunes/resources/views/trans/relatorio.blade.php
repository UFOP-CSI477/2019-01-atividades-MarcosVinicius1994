@extends('cliente')

@section('titulo', 'Exibir transferencias')


@section('conteudo')

  {{--

  Relatorio de transações exibindo o ID e o nome do cliente  --}}
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
          @foreach ($trans as $t)
            <tr>
              <td>{{ $t->id }}</td>
              <td>{{  $t->cliente_id}}</td>
              {{-- <td><a href="{{ route('procedures.show', $e->id) }}">{{ $e->name }}</a></td> --}}

            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>


@endsection
