<?php

namespace App\Http\Controllers;

use App\Models\Products; // Importe o modelo Products corretamente
use Illuminate\Http\Request;

class ProductsController extends Controller // Corrija o nome da classe base para Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Products::where('name', 'like', "%$query%")->limit(10)->get();
        return response()->json($products);
    }
}
