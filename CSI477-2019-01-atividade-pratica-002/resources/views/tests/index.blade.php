@extends('principal')

@section('titulo', 'testes')


@section('conteudo')

    <div class="container col">

      <a  class="btn btn-primary" href="/adm" role="button ">Voltar</a>
  <div class="table-responsive">

  <table class="table">
    <thead>
      <tr>
        <th>Código</th>
        <th>Código do Paciente</th>
        <th>Código do Procedimento</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tests as $t)
        <tr>
          <td>{{ $t->id }}</td>
          <td>{{  $t-> user_id}}</td>
          <td>{{ $t->procedure_id }}</td>
          <td>{{ $t->date }}</td>
          <td>  <a class="btn btn-primary col-mt-12" href="{{ route('tests.create') }}" role="button">Inserir</a></td>
          <td><a class="btn btn-primary" href="{{ route('tests.edit',$t->id) }}" role="button">Editar.</a></td>
          {{-- <td><a class="btn btn-primary" href="/home"role="button">Solicitar.</a></td> --}}

          <td><a class="btn btn-primary"href="{{ route('tests.show',$t->id) }}"role="button">Exibir</a></td>
          <td> <form method="post" action="{{ route('tests.destroy',$t->id) }}" onsubmit="return confirm('Confirma exclusão o teste?');" >

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
