<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['category'])
            ->orderBy('id', 'desc')
            ->paginate();

        return view('product.index')
            ->with([
               'products' => $products
            ]);
    }
}
