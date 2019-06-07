<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function show()
    {
        return view('contato');
        
        
}
public function include()
    {
        return view('estoque');
        
        
}
public function index()
    {
        return view('cadastro');
        
        
}

        


}