<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsControllers extends Controller
{
    public  function cadastrar()
    {
        $nome = 'Felippe';
        $variavel = 100;
        
        return  view('cliente.cadastrar', compact('nome','variavel'));
    }

    public  function excluir()
    {
        # code...
    }

    public  function editar()
    {
    // csrf-token necessario no laravel para enviar requisições em post
    $csrftoken = csrf_token();

    $html = <<<HTML
<html>
    <body>
        <h1>Cliente</h1>
        <form method="post" action="/cliente/cadastrar">
            <input type="hidden" name="_token" value="$csrftoken">
            <input type="text" name="name">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
HTML;

    return  view('cliente.editar', compact('html'));
    
    }    
  
}
