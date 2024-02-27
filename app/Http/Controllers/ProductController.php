<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function create(){

        return view('ProductsView');

    }

    public function store(Request $request){
        
        $producto = new Product();
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->save();
        return $producto;

    }

}
