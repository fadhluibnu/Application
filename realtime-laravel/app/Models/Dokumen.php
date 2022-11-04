<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with = [
        'pemohon', 'engginer', 'manager', 'admin', 'status_dokumen'
    ];
    public function pemohon()
    {
        return $this->belongsTo(User::class, 'pemohon');
    }
    public function engginer()
    {
        return $this->belongsTo(User::class, 'engginer');
    }
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager');
    }
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin');
    }
    public function status_dokumen()
    {
        return $this->belongsTo(StatusDokumen::class, 'status_id');
    }
}
