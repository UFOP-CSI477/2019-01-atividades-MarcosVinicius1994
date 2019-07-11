
@extends('principal')

@section('titulo', 'Editar Usuario')

@section('conteudo')

<form method="post" action="{{ route('users.update', $user->id) }}">
  @csrf
  @method('PATCH')


  <div class="form-row col-md-12">
    <div class="form-group">

  <div class="form-group">
  <label for="inputID">Id do paciente:</label>
  <input type="number" class="form-control" name="id" value="{{ $user->id }}">
</div>

<div class="form-group">
<label for="inputID">Nome:</label>
<input type="text" class="form-control" name="name" value="{{$user->name}}">
</div>

<div class="form-group">
<label for="inputID">email:</label>
<input type="email" class="form-control" name="price" value="{{$user->email}}">
</div>
<div class="form-group">
    <p>ID do ADM responsavel:<input class="form-control" type="number" value="{{auth::user()->id}}" name="user_id"></p>
  </div>

    <div class="col-md-4">
      <input type="submit" name="btnSalvar" value="Incluir">
    </div>
    </div>

    <a  class="btn btn-secondary" href="{{ route('users.index') }}" role="button ">Voltar</a>
  </div>

  </form>

@endsection
