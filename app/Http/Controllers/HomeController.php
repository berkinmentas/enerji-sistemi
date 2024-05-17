<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $solarProducts = Product::query()
            ->where('product_category_id' , 1)
            ->get();
        return view('home', [
            'solarProducts' => $solarProducts,
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
