<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCompanies extends Model
{
    // Easy find commit
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone'];
}
