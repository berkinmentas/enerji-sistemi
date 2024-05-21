<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pages\StoreRequest;
use App\Http\Requests\Admin\Pages\UpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\Facades\DataTables;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::query()->get();
        return view('admin.pages.index', $pages);
    }
    public function datatable(Request $request)
    {
        $model = Page::query();
        return DataTables::eloquent($model)
            ->addColumn('actions', function (Page $page) {
                $action = '<a class="btn btn-primary btn-sm btn-action me-3" href="' . route('admin.pages.edit', ['page' => $page->id]) . '">Düzenle</a>';
                $action .= '<a  data-id="' . $page->id . '" data-url="' . route('admin.pages.destroy', ['page' => $page->id]) . '" role="button" class="btn btn-danger btn-sm btn-action btn-delete me-3">Sil</a>';
                return $action;
            })
            ->rawColumns(['actions'])
            ->make();
    }
    public function create()
    {
        //
        return view('admin.pages.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        try{
            $page = Page::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => cleanHtmlContent($request->description),
            ]);
            if(!$page){
                throw new \Exception(__('Sayfa Kaydedilemedi.'));
            }
            if ($request->has('file') && count($request->file) == 1) {
                foreach ($request->file as $document) {
                    handleUploadedSingleFile($page, $document, 'logo');
                }
            }
        }catch (\Exception $exception){
            return ValidationException::withMessages([$exception->getMessage()]);
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
    public function edit(Page $page)
    {
        //
        return view('admin.pages.edit',[
            'page' => $page
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Page $page)
    {
        //
        try{
            $page->update([
                'name'=>$request->name,
                'description' => cleanHtmlContent($request->description)
                ]);
            if(!$page){
                throw new \Exception(__('Sayfa Güncellenemedi.'));
            }
            if ($request->has('file') && count($request->file) == 1) {
                foreach ($request->file as $document) {
                    handleUploadedSingleFile($page, $document, 'logo');
                }
            }
        }catch (\Exception $exception){
            return ValidationException::withMessages([$exception->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
        $page->delete();
    }
}
