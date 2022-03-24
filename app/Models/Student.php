<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'mobile',
        'dob',
        'address',
        'email',
    ];

    public function storeRules()
    {
        return [
            'full_name' => 'required',
            'gender'    => 'required',
            'mobile'    => 'required',
            'dob'       => 'required',
            'address'   => 'required',
            'email'     => 'required',
        ];
    }

}
