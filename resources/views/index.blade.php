<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.png') }}" />
      <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
      <script src="https://cdn.tailwindcss.com"></script>
      <title>E-commerce</title>
    </head>
    <body class="antialiased">

    <div class="navbar bg-gray-100">
      <div class="navbar-start">
        <a class="btn btn-ghost normal-case text-xl" href="/vendas">E-commerce</a>
      </div>
      <div class="navbar-end">
        <a class="btn" href="{{ route('produto.create')}}">Adicionar produto</a>
      </div>
    </div>
    <div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>Produto</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    
      <!-- row 1 -->
      @foreach ($produto as $prod)

      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img>{{ $prod->foto }}<img/>
              </div>
            </div>
            <div>
              <div class="font-bold">{{ $prod->nome }}</div>
            </div>
          </div>
        </td>
        <td>
          {{$prod->descricao}}
          <br/>
          
        </td>
        <td>{{$prod->valor}}</td>
        <th>
          <a class="btn btn-ghost btn-xs" href=" route('produto.edit', $produto->id)">Editar</a>
        </th>
      </tr>
      @endforeach
      
      
    </tbody>
    
  </table>
</div>
    </body>
</html>
