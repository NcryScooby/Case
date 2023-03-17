@extends('layouts.main')

@section('content')
  <h3>Adicionar Pessoa Jurídica</h3>
  <form action="{{ route('pessoa_juridica.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control shadow-none" placeholder="Digite seu Nome">
    </div>
    <div class="form-group">
      <label>Nome Fantasia</label>
      <input type="text" name="nome_fantasia" class="form-control shadow-none" placeholder="Digite o Nome Fantasia">
    </div>
    <div class="form-group">
      <label>CNPJ</label>
      <input type="text" name="cnpj" class="form-control shadow-none" placeholder="Digite o CNPJ">
    </div>

    <div>
      <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
      <a href="{{ route('pessoa_juridica.index') }}" class="btn btn-secondary mt-2">Listar Pessoas Jurídicas </a>
    </div>
  </form>
@endsection
