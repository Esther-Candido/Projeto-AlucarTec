<?php


use App\Http\Controllers\AluguelController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
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

Route::get('/', function () {
    return view('welcome');
});


//listar carro (rota definida para a visualizacao do carros.index. esta em resources/views/carros/index
Route::get('/carros', [CarroController::class, 'index']
)->name('carros.index');

//rota para o armazenamento
//quando um formulário e enviado para a URL /carros o controlador CarroController
// chamara a function store para processar os dados do formulário e sendo assim vai
// criar um novo registro de carro
Route::post('/carros', [CarroController::class, 'store']
)->name('carros.store');

//rota para criar carro.. em resource/views/create tem o formulario.. em controllers tem a function create
//url carros/create
Route::get('/carros/create', function () {
    return view('carros.create');
})->name('carros.create');

//listar cliente  (rota definida para a visualizacao do clientes.index. esta em resources/views/clientes/index
Route::get('/clientes', [ClienteController::class, 'index']
)->name('clientes.index');

//rota para armazenamento
Route::post('/clientes', [ClienteController::class, 'store']
)->name('clientes.store');

//rota para criar clientes.. em resource/views/create tem o formulario.. em controllers tem a function create
//url clientes/create
Route::get('/clientes/create', function () {
    return view('clientes.create');
})->name('clientes.create');






//listar aluguel
Route::get('/aluguel', [AluguelController::class, 'index'
])->name('aluguel.index');








