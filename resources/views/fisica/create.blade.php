@extends('layouts.main')

@section('content')
  <h3>Adicionar Pessoa Física</h3>
  <form action="{{ route('pessoa_fisica.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control shadow-none" placeholder="Digite seu Nome">
    </div>
    <div class="form-group">
      <label>Sobrenome</label>
      <input type="text" name="sobrenome" class="form-control shadow-none" placeholder="Digite seu Sobrenome">
    </div>
    <div class="form-group">
      <label>CPF</label>
      <input type="text" name="cpf" class="form-control shadow-none" placeholder="Digite seu CPF">
    </div>
    <div class="form-group">
      <label>Data de Nascimento</label>
      <input type="date" name="data_nascimento" class="form-control shadow-none"
        placeholder="Digite sua Data de Nascimento">
    </div>

    <div>
      <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
      <a href="{{ route('pessoa_fisica.index') }}" class="btn btn-secondary mt-2">Listar Pessoas Físicas</a>
    </div>

  </form>
@endsection
