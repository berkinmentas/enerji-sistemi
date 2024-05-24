<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Media;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gallery = Gallery::query()->get();
        return view('admin.galleries.index', $gallery);
    }
    public function datatable(Request $request)
    {
        $model = Gallery::query();
        return DataTables::eloquent($model)
            ->addColumn('actions', function (Gallery $gallery) {
                $action = '<a class="btn btn-primary btn-sm btn-action me-3" href="' . route('admin.galleries.edit', ['gallery' => $gallery->id]) . '">Düzenle</a>';
                $action .= '<a  data-id="' . $gallery->id . '" data-url="' . route('admin.galleries.destroy', ['gallery' => $gallery->id]) . '" role="button" class="btn btn-danger btn-sm btn-action btn-delete me-3">Sil</a>';
                return $action;
            })
            ->rawColumns(['actions'])
            ->make();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try{
            $gallery = Gallery::create([
                'name' => $request->name,
            ]);
            if(!$gallery){
                throw new \Exception(__('Sayfa Kaydedilemedi.'));
            }
            if ($request->has('documents') && count($request->documents) > 0) {
                foreach ($request->documents as $document) {
                    handleUploadedDocuments($gallery, $document);
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
    public function edit(Gallery $gallery)
    {
        //
        return view('admin.galleries.edit',[
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
        try{
            $gallery->update([
                'name'=>$request->name,
            ]);
            if(!$gallery){
                throw new \Exception(__('Galeri Güncellenemedi.'));
            }
            if ($request->has('documents') && count($request->documents) > 0) {
                foreach ($request->documents as $document) {
                    handleUploadedDocuments($gallery, $document);
                }
            }
        }catch (\Exception $exception){
            return ValidationException::withMessages([$exception->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
        $gallery->delete();
    }
    public function deleteImage(Request $request){
        $media = Media::query()
            ->where('id', $request->id)->first();
        $media->delete();
    }
}
