<?php

namespace App\Http\Controllers;

use App\Models\Produtor;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;

class ProdutorController extends Controller
{


    public function store(Request $request, Produtor $produtor) {

        $validated = $request->validate([
            'nome' => 'required|min:5|max:255',
            'comissao' => '',
        
        ]);

        $produtor =  new Produtor();

        $produtor->nome = $validated['nome'];
        $produtor->comissao = $validated['comissao'*0.75];
    
        $produtor->save();

        return redirect()->route('produtor.index');
        
    }
}
