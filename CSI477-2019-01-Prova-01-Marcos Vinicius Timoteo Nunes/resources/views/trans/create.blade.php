@extends('cliente')

@section('titulo', 'Exibir transferencias por cliente')


@section('conteudo')

  {{--
  Pagina para a inclusão de novo cliente --}}
  <h1>Incluindo uma transação a um cliente ja existente:</h1>
  <form  method="post" action="{{ route('trans.store') }}"> @csrf


    <div class="form-row">
      <div class="form-group col-md-2">
        <p>Cliente:
          {{--
          Criando select para todos os clientes  --}}
          <select class="form-control" name="cliente_id">
            @foreach($clientes as $c)
              <option value="{{ $c->id }}"
                > {{ $c->nome }}</option>
              @endforeach

            </select>
          </p>
        </div>


        <div class="form-group">
          <div class="form-group col-md-2">
            <p> Id do cliente:
              {{--
              Criando um select para todos os clientes e setando o seu ID como opções --}}
              <select class="form-control" name="cliente_id">
                @foreach($clientes as $c)
                  <option value="{{ $c->id }}">{{ $c->id }}</option>
                @endforeach
              </select>
            </div>
          </p>
        </div>

        <div class="form-group">
          <div class="form-group col-md-2">
            <p> Id do tipo de conta:

              {{--
              Criando um select com todas os tipos de transferencias como opção --}}
              <select class="form-control" name="tipo_id">
                @foreach($tipos as $t)
                  <option value="{{ $t->id }}">{{ $t->id }}</option>
                @endforeach
              </select>
            </div>
          </p>
        </div>

        <div class="form-group col-md-12">
          <label for="inputData">Data:</label>
          <input type="date" name="data"class="form-control" id="inpuData" placeholder="Insira a data">
        </div>
        <div class="form-group col-md-12">
          <label for="inputValor">Valor da transferencia:</label>
          <input type="number" name="valor"class="form-control" id="inputData" placeholder="Data da transferencia">
        </div>
        <div class="form-group col-md-12">
          <select name="credito" id="type" class="form-control">
            <option value="1">1</option>
            <option value="2">0</option>
          </select>
        </div>


        <div class="col-md-4">
          <input type="submit" name="btnSalvar" value="Incluir"  href="{{ route('trans.index') }}">
        </div>
        <a  class="btn btn-secondary">Voltar</a>
      </div>


    </form>


    @yield('conteudo')


  @endsection
