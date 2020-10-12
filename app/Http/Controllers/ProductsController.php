<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return response()->json([
            'message' => 'Menampilkan Semua Produk',
            'data' => $products
        ], 200);
    }

    public function show($id)
    {
        $products = Products::find($id);
        if($products){
        return response()->json([
            'message' => 'Produk Ditemukan',
            'data' => $products
        ], 200);
        } else{
            return response()->json([
                'message' => 'Produk Tidak Ada.'
            ], 404);
        }
    }
}
