<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return view('admin.contacts.index');
    }

    public function datatable(Request $request)
    {
        $model = Contact::query();
        return DataTables::eloquent($model)
            ->addColumn('actions', function (Contact $contact) {
                $action = '<a class="btn btn-primary btn-sm btn-action me-3" href="' . route('admin.contacts.show', ['contact' => $contact->id]) . '">Görüntüle</a>';
                $action .= '<a  data-id="' . $contact->id . '" data-url="' . route('admin.contacts.destroy', ['contact' => $contact->id]) . '" role="button" class="btn btn-danger btn-sm btn-action btn-delete me-3">Sil</a>';
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //$contact= Contact::query()->where('id', $id)->first();
        return view('admin.contacts.show', [
            'contact' => $contact
        ]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
