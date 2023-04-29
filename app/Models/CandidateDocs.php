<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateDocs extends Model
{
    use HasFactory;
    protected $appends = [
        'url',
    ];

    public function getUrlAttribute()
    {
        return asset('candidateDocs/' . $this->link);
    }
}
