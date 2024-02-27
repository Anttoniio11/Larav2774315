<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    
    public function create(){

        return view('SellerView');

    }

    public function store(Request $request){
        
        $vendedor = new seller();
        $vendedor->name = $request->name;
        $vendedor->document = $request->document;
        $vendedor->num = $request->num;
        $vendedor->save();
        return $vendedor;

    }

}
