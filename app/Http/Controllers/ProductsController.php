<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return $products;
    }

    public function show($id)
    {
        $products = Products::find($id);
        if($products){
        return $products;
        } else{
            return response()->json([
                'message' => 'Produk Tidak Ada.'
            ], 404);
        }
    }
}
