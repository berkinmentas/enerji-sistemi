<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BranchOffice;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\Facades\DataTables;

class BranchOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.branch-offices.index');
    }
    public function datatable(BranchOffice $branchOffice){
        $branchOffices = BranchOffice::query();
        return DataTables::eloquent($branchOffices)
            ->addColumn('actions', function (BranchOffice $branchOffice) {
                $action = '<a class="btn btn-primary btn-sm btn-action me-3" href="' . route('admin.branchOffices.edit', ['branchOffice' => $branchOffice->id]) . '">Düzenle</a>';
                $action .= '<a  data-id="' . $branchOffice->id . '" data-url="' . route('admin.branchOffices.destroy', ['branchOffice' => $branchOffice->id]) . '" role="button" class="btn btn-danger btn-sm btn-action btn-delete me-3">Sil</a>';
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
        return view('admin.branch-offices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $branchOffice = BranchOffice::create([
                'location' => $request->location,
                'go_to_location' => $request->go_to_location,
                'title'=> $request->title,
                'address'=>$request->address,
                'city'=>$request->city,
                'district'=>$request->district,
                'phone_number'=>$request->phone_number,
                'phone_number2'=>$request->phone_number2,
                'email'=>$request->email
            ]);
            if(!$branchOffice){
                throw new \Exception(__('Şube Kaydedilemedi.'));}
        }catch (\Exception $exception){
            throw new \Exception(ValidationException::withMessages(['message' => $exception->getMessage()]));
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
    public function edit(BranchOffice  $branchOffice)
    {
        //
        return view('admin.branch-offices.edit',['branchOffice'=>$branchOffice]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BranchOffice $branchOffice)
    {
        //
        try{
            $branchOffice->update([
                'location' => $request->location,
                'go_to_location' => $request->go_to_location,
                'title'=> $request->title,
                'address'=>$request->address,
                'city'=>$request->city,
                'district'=>$request->district,
                'phone_number'=>$request->phone_number,
                'phone_number2'=>$request->phone_number2,
                'email'=>$request->email
            ]);
            if(!$branchOffice){
                throw new \Exception(__('Şube Güncellenemedi.'));
            }
        }catch (\Exception $exception){
            throw new \Exception(ValidationException::withMessages(['message' => $exception->getMessage()]));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BranchOffice  $branchOffice)
    {
        //
        $branchOffice->delete();
    }
}
