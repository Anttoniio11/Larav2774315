<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    
    public function create(){

        return view('clientView');

    }

    public function store(Request $request){
        
        $cliente = new Client();
        $cliente->name = $request->name;
        $cliente->document = $request->document;
        $cliente->save();
        return $cliente;

    }

}
