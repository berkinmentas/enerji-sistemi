<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index($product_category_id)
    {
        $productCategoryName = ProductCategory::find($product_category_id)->name;
        $products = Product::query()
            ->where('product_category_id', $product_category_id)
            ->get();
        return view('solarHeatings', ['products' => $products, 'productCategoryName' => $productCategoryName]);
    }
    public function show($product_id){
        $product = Product::query()->where("id", $product_id)->first();
        return view('productDetail', ['product' => $product]);
    }
}
