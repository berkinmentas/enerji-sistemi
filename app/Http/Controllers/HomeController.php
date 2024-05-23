<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Product::query()
            ->get();
        $productCategories = ProductCategory::query()
            ->get();
        $comments = Comment::query()
            ->get();
        $solarProducts = Product::query()
            ->where('product_category_id' , 11)
            ->get();
        return view('home', [
            'products' => $products,
            'solarProducts' => $solarProducts,
            'comments' => $comments,
            'productCategories' => $productCategories,
        ]);
    }
    public function page($slug){
        $page = Page::query()
            ->where('slug',$slug)
            ->first();
        return view('pages', [
            'page' => $page
        ]);
    }

}
