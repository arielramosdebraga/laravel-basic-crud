<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query();

        $products->when($request->search, function($query, $vl) {
            $query->where('name', 'like', '%' .  $vl . '%');
        });

        $products = $products->get();

        return view('index', [
            'products' => $products
        ]);
    }
}
