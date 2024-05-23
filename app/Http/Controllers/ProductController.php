<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $productParentCategories = ProductCategory::query()
            ->whereNull('parent_id')
            ->get();

        $productCategories = ProductCategory::query()
            ->whereNotNull('parent_id')
            ->get();
        $productCategoriesArray = [];
        foreach ($productParentCategories as $productParentCategory) {
            $productCategoriesArray[$productParentCategory->id] = [];
        }
        foreach ($productCategories as $productCategory) {
            $productCategoriesArray[$productCategory->parent_id][] = $productCategory;
        }
        $productParentCategoriesArray = [];
        foreach ($productParentCategories as $productParentCategory) {
            $productParentCategoriesArray[$productParentCategory->id] = $productParentCategory->name;
        }
        $products = Product::query();
        if ($request->has('categories') && !empty($request->categories)) {
            $products = $products
                ->whereIn('product_category_id', $request->categories)->paginate(4);
        } elseif ($request->has('categoryAll') && !empty($request->categoryAll)) {
            $products = $products->whereHas('category', function ($query) use ($request) {
                $query->where('parent_id', $request->categoryAll);
            });
            $products = $products->paginate(4);
        } else {
            $products = $products->paginate(4);
        }
// ProductCategory::query()->where('id')
        return view('products', [
            'products' => $products,
            'productCategoriesArray' => $productCategoriesArray,
            'productParentCategories' => $productParentCategories,
            'productParentCategoriesArray' => $productParentCategoriesArray
        ]);
    }
    public function show($product_id)
    {
        $product = Product::query()->where("id", $product_id)->first();
        $productCategory = ProductCategory::query()->where("id", $product->product_category_id)->first();
        $products = Product::query()
            ->where('product_category_id', $product->product_category_id)
            ->get();
        return view('productDetail', [
            'product' => $product,
            'productCategory' => $productCategory,
            'products' => $products
        ]);
    }
}
