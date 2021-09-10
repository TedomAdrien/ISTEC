<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporyParent extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'ville_residence', 'phone_number', 'tempory_student_id'];
}