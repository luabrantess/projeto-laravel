<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use App\Models\Produto;
use App\Models\Produtor;

class ProdutoController extends Controller
{

    public function index(Afiliado $afiliado, Produtor $produtor)
    {
        $produto = Produto::get();
        return view('index', ['produto' => $produto]);
    }

    public function create(Afiliado $afiliado, Produtor $produtor)
    {
        return view('create');
    }

    public function edit(Produto $produto, Afiliado $afiliado, Produtor $produtor)
    {

        return view('edit', ['produto' => $produto]);

    }

    public function update(Request $request, Produto $produto)
    {

        $this->save($request, $produto);
        return redirect()->route('produto.index');

    }

    public function store(Request $request, Produto $produto, Afiliado $afiliado, Produtor $produtor) {

        $validated = $request->validate([
            'nome' => 'required|min:5|max:255',
            'descricao' => 'required',
            'valor' => 'required',
            'afiliado' => '',
            'produtores' => 'required',
            'foto' => [File::types(['png'])],
        
        ]);

        $produto =  new Produto();

        $produto->nome = $validated['nome'];
        $produto->descricao = $validated['descricao'];
        $produto->valor = $validated['valor'];
        $produto->afiliado = $validated['afiliado'];
        $produto->produtor = $validated['produtor'];
        if ($request->file('foto')) {
            $produto->foto = $request->file('foto')->storePublicly('foto','public');
        }

        $produto->save();

        return redirect()->route('produto.index');
        
    }
}
