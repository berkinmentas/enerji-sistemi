<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        try {
            $product = Product::create([
                'product_category_id' => $request->product_category_id,
                'name' => $request->name,
                'description' => $request->description,
                'hot_water_capacity' => $request->hot_water_capacity,
                'cold_water_capacity' => $request->cold_water_capacity,
                'internal_boiler_thickness' => $request->internal_boiler_thickness,
                'outer_boiler_thickness' => $request->outer_boiler_thickness,
                'tube_length' => $request->tube_length,
                'outer_tube_diameter' => $request->outer_tube_diameter,
                'inner_tube_diameter' => $request->inner_tube_diameter,
                'glass_thickness' => $request->glass_thickness,
                'tube_reflectance_ratio' => $request->tube_reflectance_ratio,
                'empty_tube_temperature' => $request->empty_tube_temperature,
                'tube_material' => $request->tube_material,
                'vacuum' => $request->vacuum,
                'heat_loss_coefficient' => $request->heat_loss_coefficient,
                'light_absorption' => $request->light_absorption,
                'surface_coating' => $request->surface_coating,
            ]);
            if (!$product) {
                throw new \Exception(__('Ürün Kaydedilemedi.'));
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

    public function update(Request $request, Product $product)
    {
        try {
            $product->update([
                'product_category_id' => $request->product_category_id,
                'name' => $request->name,
                'description' => $request->description,
                'hot_water_capacity' => $request->hot_water_capacity,
                'cold_water_capacity' => $request->cold_water_capacity,
                'internal_boiler_thickness' => $request->internal_boiler_thickness,
                'outer_boiler_thickness' => $request->outer_boiler_thickness,
                'tube_length' => $request->tube_length,
                'outer_tube_diameter' => $request->outer_tube_diameter,
                'inner_tube_diameter' => $request->inner_tube_diameter,
                'glass_thickness' => $request->glass_thickness,
                'tube_reflectance_ratio' => $request->tube_reflectance_ratio,
                'empty_tube_temperature' => $request->empty_tube_temperature,
                'tube_material' => $request->tube_material,
                'vacuum' => $request->vacuum,
                'heat_loss_coefficient' => $request->heat_loss_coefficient,
                'light_absorption' => $request->light_absorption,
                'surface_coating' => $request->surface_coating,
            ]);


        } catch (\Exception $exception) {
            throw ValidationException::withMessages([$exception->getMessage()]);
        }
    }
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
