@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="">
                      <a href="/Paciente" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Area geral</a>
                       <a href="/operador"class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Area Operador</button></a>
                       <a href="/adm"class="btn btn-primary btn-lg active"role="button" aria-pressed="true">Area Administrador</button></a>
                   </div>


                          <div class="jumbotron text-center col-mt-16">
                            <h1>Clinica de analises laboratoriais</h1>
                            <p>Agende já sua consulta com nossas especialidades!</p>
                          </div>



                          <div class="container col-mt-12">
                            <h2>Lista de exames disponiveis:</h2>
                            <p>A lista pode ser atualizada trimestralmente!!!</p>

                            <a class="btn btn-primary col-mt-12" href="/MostrarProcePadrao" role="button">Procedimentos</a>
                            {{-- <a class="btn btn-primary col-mt-12 " href="/procedures" role="button">Listar Procedimentos</a>
                              <a class="btn btn-primary col-mt-12" href="{{ route('procedures.create') }}" role="button">Inserir</a> --}}
                              {{-- <a class="btn btn-primary" href="{{ route('procedures.edit', $procedure->id) }}" role="button">Editar</a> --}}



                </div>
        </div>
    </div>
</div>
@endsection
