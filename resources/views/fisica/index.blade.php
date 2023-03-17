@extends('layouts.main')

@section('content')
  <table class="table table-bordered table-striped text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">CPF</th>
        <th scope="col">Data de Nascimento</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pessoaFisica as $fisica)
        <tr>
          <td>{{ $fisica->nome }}</td>
          <td>{{ $fisica->sobrenome }}</td>
          <td>{{ $fisica->cpf }}</td>
          <td>{{ $fisica->data_nascimento }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('pessoa_fisica.create') }}" class="btn btn-primary mt-2">Gerar XML</a>
  <a href="{{ route('pessoa_fisica.create') }}" class="btn btn-secondary mt-2">Voltar</a>
@endsection
