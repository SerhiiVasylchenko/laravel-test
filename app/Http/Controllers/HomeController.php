<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->get();

        return view('home', compact('products'));
    }

    public function getProductById(Request $request)
    {
        $product = Product::where('id', $request->id)->first();

        $product->category;
        $product->tags;
        //$product->categoryName = $product->category->name;

        /*$productTagsList = '';

        foreach ($product->tags as $tag) {
            $productTagsList += $tag->name;
        }*/

        //$productTags = $product->tags;

        //$product->tagsList = name;

        //return '111';
        return $product;
    }
}
