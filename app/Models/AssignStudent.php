<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name' ,
        'birthdate' ,
        'birthplace' ,
        'sex',
        'email',
        'pays',
        'phone_number',
        'cni',
        'form',
    ];
}
