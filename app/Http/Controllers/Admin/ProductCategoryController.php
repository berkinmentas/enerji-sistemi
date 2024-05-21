<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\Facades\DataTables;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = ProductCategory::query()
        ->where('parent_id' , null)
        ->get();
        return view('admin.product-categories.index',
        [
            'productCategories' => $productCategories,
        ]);
    }
    public function datatable(Request $request){
        $productCategories = ProductCategory::query();
        return DataTables::eloquent($productCategories)
            ->editColumn('parent_id', function(ProductCategory $productCategory){
                if(!is_null($productCategory->parent_id)){
                    $parentCategory = ProductCategory::query()->where('id',$productCategory->parent_id)->first();
                    return $parentCategory->name;
                } else{
                    return 'Bağlı olduğu üst kategori yok.';
                }
            })
            ->editColumn('is_home_page', function (ProductCategory $productCategory) {
                return $productCategory->is_home_page == 1 ? 'Anasayfada Gösteriliyor' : 'Anasayfada Gösterilmiyor';
            })
            ->addColumn('actions', function (ProductCategory $productCategory) {
                $action = '<a class="btn btn-primary btn-sm btn-action me-3" href="' . route('admin.productCategories.edit', ['productCategory' => $productCategory->id]) . '">Düzenle</a>';
                $action .= '<a  data-id="' . $productCategory->id . '" data-url="' . route('admin.productCategories.destroy', ['productCategory' => $productCategory->id]) . '" role="button" class="btn btn-danger btn-sm btn-action btn-delete me-3">Sil</a>';
                return $action;
            })

            ->rawColumns(['actions'])
            ->make();

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $productCategories = ProductCategory::query()
            ->where('parent_id' , null)
            ->get();
        return view('admin.product-categories.create', [
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $productCategory = ProductCategory::create([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'description' => $request->description,
                'is_home_page' => ($request->has('is_home_page'))
            ]);
            if (!$productCategory) {
                throw new \Exception(__('Kategori Kaydedilemedi.'));
            }
        } catch (\Exception $exception) {
            throw new \Exception(ValidationException::withMessages([$exception->getMessage()]));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory){
        $productParentCategories = ProductCategory::query()
            ->where('parent_id' , null)
            ->get();

        return view('admin.product-categories.edit', [
            'productCategory' => $productCategory,
            'productParentCategories' => $productParentCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $productCategory){

        try{
            $productCategory->update([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'description' => $request->description,
                'is_home_page' => ($request->has('is_home_page'))
            ]);
            if(!$productCategory){
                throw new \Exception(__('Kategori Güncellenemedi.'));
            }
        }catch (\Exception $exception){
            throw new \Exception(ValidationException::withMessages([$exception->getMessage()]));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
        $productCategory->delete();
    }
}
