<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::where('title', 'product5')->first();

        $data = [
            "products" => $products,
        ];
        return response($data);
    }
}
