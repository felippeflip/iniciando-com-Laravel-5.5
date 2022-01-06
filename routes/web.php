<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Exemplos de Rotas amigaveis




// MVC - Model - View - Controller
// Retornar um variavel para a view 
Route::get('/cliente/cadastrar', 'ClientsControllers@cadastrar');
Route::get('/cliente/cadastrar', 'ClientsControllers@excluir');
Route::get('/cliente', 'ClientsControllers@editar');

Route::get('/for-if/{value}', function($value){
    return view('for-if')
        ->with('value', $value)
        ->with('myArray', [
            'chave1' => 'valor1',
            'chave2' => 'valor2',
            'chave3' => 'valor3',
        ]);
});


/*


Route::post('/cliente/cadastrar', function(Request $request){
    echo $request->get('name');
    echo $request->name;
});



Route::get('/admin/cliente', function () {
    return "Admin - Hello World";
});

// Exemplo de rota com comando ECHO
Route::get('/cliente-echo', function () {
    echo "Hello World - echo";
});

// Exemplo de rota passando variaveis nome e id
Route::get('/produto/{name}/{id}', function ($name, $id) {
    return "Produto: $name - $id";
});

// Exemplo de rota passando variaveis nome e id, porem definindo valor padrão no ID caso não passe o valor ID
Route::get('/fornecedor/{name}/{id?}', function ($name, $id = 0000) {
    return "Fornecedor: $name - $id";
});

// COC Convention Over Configuration
