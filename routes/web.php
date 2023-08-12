<?php

use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutorController;
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/vendas', [VendasController::class, 'index'])->name('vendas.index');

// Função que grava no banco de dados o novo produto
Route::post('/produto/post', [ProdutoController::class, 'store'])->name('produto.store');

// Função que grava no banco de dados o nova venda
Route::post('/venda/post', [VendasController::class, 'store'])->name('venda.store');

// Função que grava no banco de dados o nova venda
Route::post('/afiliado/post', [AfiliadoController::class, 'store'])->name('afiliado.store');

// Função que grava no banco de dados o nova venda
Route::post('/produtor/post', [ProdutorController::class, 'store'])->name('produtor.store');

// Abre a página de formulário para cadastrar um novo produto
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');

// Abre a página de formulário de edição do produto
Route::get('/produto/edit/{produto}', [ProdutoController::class, 'edit'])->name('produto.edit');

// Função que atualiza no banco de dados o produto
Route::put('/produto/update/{produto}', [ProdutoController::class, 'update'])->name('produto.update');
