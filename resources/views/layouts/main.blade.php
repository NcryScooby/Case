<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/styles.css">
  <title>Sistema de cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <header>
    <h1>Sistema de Cadastro</h1>
    <div class="links">
      <a href="/fisica/criar">Pessoal Física</a>
      <a href="/juridica/criar">Pessoal Jurídica</a>
    </div>
  </header>
  <main>
    @yield('content')
  </main>
</body>

</html>
