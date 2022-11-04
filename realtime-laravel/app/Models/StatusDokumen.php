<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusDokumen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function dokumens()
    {
        return $this->hasMany(Dokumen::class);
    }
}
