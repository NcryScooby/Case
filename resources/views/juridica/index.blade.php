@extends('layouts.main')

@section('content')
  <table class="table table-bordered table-striped text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Nome Fantasia</th>
        <th scope="col">CNPJ</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pessoaJuridica as $juridica)
        <tr>
          <td>{{ $juridica->nome }}</td>
          <td>{{ $juridica->nome_fantasia }}</td>
          <td>{{ $juridica->cnpj }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('pessoa_fisica.create') }}" class="btn btn-primary mt-2">Gerar XML</a>
  <a href="{{ route('pessoa_juridica.create') }}" class="btn btn-secondary mt-2">Voltar</a>
@endsection
