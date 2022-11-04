<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function liga()
    {
        return $this->belongsTo(Liga::class, 'liga_id', 'id');
    }
    public function products()
    {
        return $this->belongsTo(PesananDetail::class, 'product_id', 'id');
    }
}
