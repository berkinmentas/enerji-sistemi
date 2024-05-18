<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Comments\StoreRequest;
use App\Http\Requests\Admin\Comments\UpdateRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\Facades\DataTables;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.comments.index');
    }

    public function datatable(Request $request){
        $comments = Comment::query();
        return DataTables::eloquent($comments)
            ->addColumn('actions', function (Comment $comment) {
                $action = '<a class="btn btn-primary btn-sm btn-action me-3" href="' . route('admin.comments.edit', ['comment' => $comment->id]) . '">Düzenle</a>';
                $action .= '<a  data-id="' . $comment->id . '" data-url="' . route('admin.comments.destroy', ['comment' => $comment->id]) . '" role="button" class="btn btn-danger btn-sm btn-action btn-delete me-3">Sil</a>';
                return $action;
            })
            ->rawColumns(['actions'])
            ->make();

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        try {
            $comment = Comment::create([
                'name' => $request->name,
                'title' => $request->title,
                'comment' => $request->comment
            ]);
            if (!$comment) {
                throw new \Exception(__('Yorum Kaydedilemedi.'));
            }
            if ($request->has('file') && count($request->file) == 1) {
                foreach ($request->file as $document) {
                    handleUploadedSingleFile($comment, $document, 'logo');
                }
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
    public function edit(Comment $comment){

        return view('admin.comments.edit', [
            'comment' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Comment $comment){

        try{
            $comment->update([
                'name' => $request->name,
                'title' => $request->title,
                'comment'=> $request->comment
            ]);
            if(!$comment){
                throw new \Exception(__('Yorum Güncellenemedi.'));
            }
            if ($request->has('file') && count($request->file) == 1) {
                foreach ($request->file as $document) {
                    handleUploadedSingleFile($comment, $document, 'logo');
                }
            }
        }catch (\Exception $exception){
            throw new \Exception(ValidationException::withMessages([$exception->getMessage()]));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment){
        $comment->delete();
    }

}
