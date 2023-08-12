<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.png') }}" />
      <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
      <script src="https://cdn.tailwindcss.com"></script>
      <title>Cadastro</title>
    </head>

<body>

    <div class="navbar bg-base-100">
      <div class="navbar-start">
        <a class="btn btn-ghost normal-case text-xl">E-commerce</a>
      </div>
    </div>
    <form action="{{ route('produto.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="inputs p-10 grid ">

        <div class="flex-1">
            <div class="grid mb-3">
            <a class=" normal-case text-xl font-medium text-[#002D4B]">Gerenciamento de cadastro de produtos</a>
            <a class=" normal-case text-2xl font-bold text-[#002D4B]">Criação de produtos</a>
        
            </div>
        </div>

        <div class="grid w-full">
            <label for="foto">Foto do produto</label>
            <input class="file-input file-input-bordered w-full" placeholder="" type="file" name="foto"/>
        </div>

        <div class="grid w-full">
            <label for="nome">Nome do produto</label>
            <input class="file-input file-input-bordered w-full" placeholder="" type="text" name="nome"/>
        </div>
        <div class="grid w-full">
            <label for="descricao">Descrição do produto</label>
            <input class="file-input file-input-bordered w-full" placeholder="" type="text" name="descricao"/>
        </div>
        <div class="grid w-full">
            <label for="valor">Valor do produto</label>
            <input class="file-input file-input-bordered w-full " placeholder="" type="number" name="valor"/>
        </div>
        <div class="grid w-full">
            <label for="afiliado">Afiliado do produto</label>
            
            <select class="file-input file-input-bordered w-full" placeholder="" name="afiliado">
            @foreach ($afiliados as $afiliado)
            <option value="{{ $afiliado->nome}}">
            </option>
            @endforeach
            </select>

        </div>
        <div class="grid w-full">
            <label for="produtor">Produtor do produto</label>
            <select class="file-input file-input-bordered w-full" placeholder="" name="produtor">
            @foreach ($produtores as $produtor)
            <option value="{{ $produtor->nome}}">
            </option>
            @endforeach
            </select>
        </div>


        <div class="text-center w-full mt-7">
            <button type="submit" class="outline-0 bg-[#002D4B] p-2 w-full p-4 rounded shadow text-white font-medium w-[20%] hover:bg-blue-800">Salvar</button>
        </div>


        </div>

    </form>
</body>