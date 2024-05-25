<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Products\StoreRequest;
use App\Http\Requests\Admin\Products\UpdateRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {

        return view('admin.products.index');
    }

    public function datatable(Request $request)
    {
        $model = Product::query();
        return DataTables::eloquent($model)
            ->addColumn('actions', function (Product $product) {
                $action = '<a class="btn btn-primary btn-sm btn-action me-3" href="' . route('admin.products.edit', ['product' => $product->id]) . '">Düzenle</a>';
                $action .= '<a  data-id="' . $product->id . '" data-url="' . route('admin.products.destroy', ['product' => $product->id]) . '" role="button" class="btn btn-danger btn-sm btn-action btn-delete me-3">Sil</a>';
                return $action;
            })
            ->rawColumns(['actions'])
            ->make();
    }

    public function create()
    {
        $productCategories = ProductCategory::query()->get();

        return view('admin.products.create', [
            'productCategories' => $productCategories
        ]);
    }

    public function store(StoreRequest $request)
    {
        $features = [];
        for($i = 0 ; $i< count($request->features); $i+=2){
            if (isset($request->features[$i + 1])) {
                $features[$request->features[$i]] = $request->features[$i + 1];
            }
        }
        try {
            $product = Product::create([
                'product_category_id' => $request->product_category_id,
                'name' => $request->name,
                'sub_name'=>$request->sub_name,
                'description' => $request->description,
                'features' => $features
            ]);
            if (!$product) {
                throw new \Exception(__('Ürün Kaydedilemedi.'));
            }
            if ($request->has('file') && count($request->file) == 1) {
                foreach ($request->file as $document) {
                    handleUploadedSingleFile($product, $document, 'logo');
                }
            }
        } catch (\Exception $exception) {
            throw ValidationException::withMessages([$exception->getMessage()]);
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Product $product)
    {
        $productCategories = ProductCategory::query()->get();
        return view('admin.products.edit', [
            'product' => $product,
            'productCategories' => $productCategories
        ]);
    }

    public function update(UpdateRequest $request, Product $product)
    {

        $features = [];
        for($i = 0 ; $i< count($request->features); $i+=2){
            if (isset($request->features[$i + 1])) {
                $features[$request->features[$i]] = $request->features[$i + 1];
            }
        }

        try {
            $product->update([
                'product_category_id' => $request->product_category_id,
                'name' => $request->name,
                'sub_name' => $request->sub_name,
                'description' => $request->description,
                'features' => $features
            ]);
            if ($request->has('file') && count($request->file) == 1) {
                foreach ($request->file as $document) {
                    handleUploadedSingleFile($product, $document, 'logo');
                }
            }
        } catch (\Exception $exception) {
            throw ValidationException::withMessages([$exception->getMessage()]);
        }
    }
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
