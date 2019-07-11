@extends('principal')

@section('titulo', 'Procedimentos')


@section('conteudo')

    <div class="container col">

      <td>    <a  class="btn btn-primary" href="/adm" role="button ">Voltar</a></td>
  <div class="table-responsive">

  <table class="table">
    <thead>
      <tr>
        <th>Código</th>
        <th>Código do cliente</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Data de criação</th>
        <th>Data de atualização</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($procedures as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{  $e-> user_id}}</td>
          <td><a href="{{ route('procedures.show', $e->id) }}">{{ $e->name }}</a></td>
          <td>{{ $e->price }}</td>
          <td>{{ $e->created_at }}</td>
          <td>{{ $e->update_at }}</td>
          <td>  <a class="btn btn-primary col-mt-12" href="{{ route('procedures.create') }}" role="button">Inserir</a></td>
          <td><a class="btn btn-primary" href="{{ route('procedures.edit', $e->id) }}" role="button">Editar.</a></td>
          {{-- <td><a class="btn btn-primary" href="/home"role="button">Solicitar.</a></td> --}}

          <td><a class="btn btn-primary"href="{{ route('procedures.show', $e->id) }}"role="button">Exibir</a></td>
          <td> <form method="post" action="{{ route('procedures.destroy', $e->id) }}" onsubmit="return confirm('Confirma exclusão do procedumento?');" >


             @csrf
             @method('DELETE')
             <input type="submit" value="Excluir">
           </form></td>
        </tr>
      @endforeach

    </tbody>
  </table>
  </div>
</div>


<script type="text/javascript">

</script>

@endsection
