<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Vendas;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    public function store(Request $request, Afiliado $afiliado, Vendas $vendas) {

        $validated = $request->validate([
            'nome' => 'required|min:5|max:255',
            'comissao' => '',
        
        ]);

        $afiliado =  new Afiliado();

        $afiliado->nome = $validated['nome'];
        $afiliado->comissao = $validated['comissao'*0.25];
    
        $afiliado->save();

        return redirect()->route('produto.index');
        
    }
}
