<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.png') }}" />
      <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
      <script src="https://cdn.tailwindcss.com"></script>
      <title>Compras</title>
</head>
<body>
<div class="navbar bg-gray-100">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href="/">Loja</a>
  </div>
  <div class="flex-none">
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
          <span class="badge badge-sm indicator-item">8</span>
        </div>
      </label>
      <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
        <div class="card-body">
          <span class="font-bold text-lg">8 Items</span>
          <span class="text-info">Subtotal: $999</span>
          <div class="card-actions">
            <button class="btn btn-primary btn-block">Comprar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
      </svg>

        </div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        
      </ul>
    </div>
  </div>
</div>



<div class="flex">
<form action="{{ route('venda.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

      <div class="card w-96 bg-base-100 shadow-xl m-5">
        <figure>{{ $produto->foto }}</figure>
        <div class="card-body">
          <h2 class="card-title">{{ $produto->nome }}</h2>
          <p>{{ $produto->descricao }}</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary" type="submit">Compre agora</button>
          </div>
        </div>
      </div>

</form>

      <div class="card w-96 bg-base-100 shadow-xl m-5">
        <figure>
          <img src="https://moveislinhares.vteximg.com.br/arquivos/ids/214642-1000-1000/Fone-de-ouvido-JBL-TUNE510-com-Bluetooth-na-cor-Azul-1.jpg?v=638000527607370000"/>
        </figure>
        <div class="card-body">
          <h2 class="card-title">Nome do produto</h2>
          <p>Descrição do produto</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary" type="submit">Compre agora</button>
          </div>
        </div>
      </div>

</div>

</body>
</html>