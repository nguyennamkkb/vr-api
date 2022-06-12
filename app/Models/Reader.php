<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;

class Reader extends Model
{
    use HasFactory;
    protected $table = 'readers';
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'idUnit');
    }
}
