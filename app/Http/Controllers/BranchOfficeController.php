<?php

namespace App\Http\Controllers;

use App\Models\BranchOffice;
use Illuminate\Http\Request;

class BranchOfficeController extends Controller
{
    //
    public function index(){
        $branchOffices = BranchOffice::query()
            ->get();
        return view('branchOffices', [
            'branchOffices' => $branchOffices
        ]);
    }
}
