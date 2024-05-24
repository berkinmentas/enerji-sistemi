<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $galleries = Gallery::query()
            ->get();
        $products = Product::query()
            ->get();
        $productCategories = ProductCategory::query()
            ->get();
        $productChildCategories = ProductCategory::query()
            ->whereNotNull('parent_id')
            ->get();
        $productParentCategories = ProductCategory::query()
            ->whereNull('parent_id')
            ->get();
        $productCategoriesArray = [];
        foreach ($productParentCategories as $productParentCategory) {
            $productCategoriesArray[$productParentCategory->id] = [];
        }
        foreach ($productChildCategories as $productCategory) {
            $productCategoriesArray[$productCategory->parent_id][] = $productCategory;
        }
        $productsAll = [];
        foreach(array_keys($productCategoriesArray) as $productCategory){
            $productsAll[$productCategory] = [];
            foreach($productCategoriesArray[$productCategory] as $category){
                foreach($products as $product){
                    if($product->product_category_id == $category->id){

                        $productsAll[$productCategory][] = $product;
                    }
                }
            }
            foreach($products as $pr){
                if($pr->product_category_id == $productCategory){
                    $productsAll[$productCategory][] = $pr;
                }
            }
        }
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
            'productsAll' => $productsAll,
            'galleries' => $galleries,
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
