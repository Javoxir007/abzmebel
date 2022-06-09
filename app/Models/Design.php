<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    const FREE_DESIGN = 1;
    const CALL_SPECIALIST = 2;

    protected $guarded = [];
}
