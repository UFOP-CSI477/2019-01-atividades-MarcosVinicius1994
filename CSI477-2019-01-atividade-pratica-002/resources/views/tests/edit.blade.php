
@extends('principal')

@section('titulo', 'Editar Teste')

@section('conteudo')

<form method="post" action="{{ route('tests.update', $test->id) }}">
  @csrf
  @method('PATCH')
  <div class="form-row col-md-12">
    <div class="form-group">

  <div class="form-group">
  <label for="inputID">Id do teste:</label>
  <input type="number" class="form-control" name="id" value="{{ $test->id }}">
</div>

<div class="form-group">
<label for="inputTDuser">UserID:</label>
<input type="number" class="form-control" name="user_id" value="{{$test->user_id}}">
</div>

<div class="form-group">
<label for="inputIDProcedimento">Id procedimento:</label>
<input type="number" class="form-control" name="procedure_id" value="{{$test->procedure_id}}">
</div>
<div class="form-group">
<label for="inputData">Data do teste:</label>
<input type="date" class="form-control" name="date" value="{{$test->date}}">
</div>
{{-- <div class="form-group">
    <p>ID do ADM responsavel:<input class="form-control" type="number" value="{{auth::user()->id}}" name="user_id"></p>
  </div> --}}

    <div class="col-md-4">
      <input type="submit" name="btnSalvar" value="Incluir">
    </div>
    </div>

    <a  class="btn btn-secondary" href="{{ route('tests.index') }}" role="button ">Voltar</a>
  </div>

  </form>

@endsection
