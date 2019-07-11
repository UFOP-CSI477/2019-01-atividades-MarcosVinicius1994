@extends('principal')

@section('titulo', 'Procedimentos')


@section('conteudo')
    <div class="container col">

  <div class="table-responsive">
<h1>Relatorio de procedimentos e testes agendados</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ID do Procedimento</th>
        <th>Nome do procedumento</th>
        <th>Id do test</th>
        <th>Id do usuario</th>
        <th>Data</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($procedures as $p)
        @foreach ($tests as $t)
          @if ($t->procedure_id == $p->id)


        <tr>
          <td>{{ $p->id }}</td>
          <td>{{  $p->nome}}</td>
          {{-- <td><a href="{{ route('procedures.show', $e->id) }}">{{ $e->name }}</a></td> --}}
          <td>{{ $t->id }}</td>
          <td>{{ $t->user_id }}</td>
          <td>{{ $t->date }}</td>
          <td><a  class="btn btn-primary" href="/" role="button ">Voltar</a></td>
          {{-- <td><a class="btn btn-primary" href="{{ route('operador.edit', $e->id) }}" role="button">Editar.</a></td>
          {{-- <td><a class="btn btn-primary" href="/home"role="button">Solicitar.</a></td> --}} 
        @endif
      @endforeach
    @endforeach

             @csrf
             @method('DELETE')

        </tr>

    </tbody>
  </table>
  </div>
</div>


<script type="text/javascript">

</script>

@endsection
