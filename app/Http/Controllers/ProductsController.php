<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $products = Products::create([
            'name' => $request ->name,
            'price' => $request ->price,
            'rating' => $request ->rating,
            'quantity' => $request ->quantity
        ]);
        if($products) {
            return response()->json([
                'message' => 'Produk Berhasil Disimpan.',
                'data' => $products
        ], 200);
    } else {
        return response()->json([
            'message' => 'Produk Gagal Disimpan.'
        ], 401);
    }
}
public function destroy($id)
    {
        $products = Products::find($id);
        if($products){
            $products->delete();
        return response()->json([
            'message' => 'Produk Berhasil Dihapus.',
            'data' => $products
        ], 200);
        } else{
            return response()->json([
                'message' => 'Produk Tidak Ada.'
            ], 404);
        }
    }
}
