
@extends('principal')

@section('titulo', 'Editar Procedimento')

@section('conteudo')

<form method="post" action="{{ route('operador.update', $procedure) }}">
  @csrf
  @method('PATCH')
  <div class="form-row col-md-12">
    <div class="form-group">

<div class="form-group">
<label for="inputID">Preço:</label>
<input type="number" class="form-control" name="price" value="{{$procedure->price}}">
</div>
<div class="form-group">
    <p>ID do ADM responsavel:<input class="form-control" type="number" value="{{auth::user()->id}}" name="user_id"></p>
  </div>



      <div class="col-md-4">
        <input type="submit" name="btnSalvar" value="Incluir">
      </div>
      </div>

    </div>

    <a  class="btn btn-secondary" href="{{ route('operador.index') }}" role="button ">Voltar</a>
  </div>

  </form>

@endsection
