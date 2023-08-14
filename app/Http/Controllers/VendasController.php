<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Produto;
use App\Models\Produtor;
use App\Models\Vendas;
use Illuminate\Http\Request;

class VendasController extends Controller
{

    public function index(Produto $produto, Afiliado $afiliado, Produtor $produtor)
    {
        //$vendas = Vendas::get();
        return view('vendas/index', ['produto' => $produto], ['afiliado' => $afiliado], ['produtor' => $produtor]);
    
    }
    public function store(Request $request, Produto $produto, Afiliado $afiliado, Produtor $produtor) {

        $validated = $request->validate([
            'produto' => 'required|min:5|max:255',
            'quantidade' => 'required',
            'valor' => 'required',
        ]);

        $vendas =  new Vendas();

        $vendas->produto = $validated['produto'];
        $vendas->quantidade = $validated['quantidade'];
        $vendas->valor = $validated['valor'*'quantidade'];
    
        $vendas->save();

        return redirect()->route('vendas.index');
        
    }
}
