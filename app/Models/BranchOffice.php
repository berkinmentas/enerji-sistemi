<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchOffice extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'location',
        'title',
        'address',
        'city',
        'district',
        'phone_number',
        'phone_number2',
        'email',
     ];
}
