<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Pasien.php
class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    protected $fillable = ['full_name', 'birth_date', 'sex', 'address'];
}
