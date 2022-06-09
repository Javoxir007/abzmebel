<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    } 

    //PageController dagi index metodida category_images ni olishda ishlatiladi

    /* public function scopeByCategory($query, array $ids)
    {
        $query->whereIn('category_id', $ids);
    } */

}
