<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $appends = [
        'status_text',
    ];

    public function getStatusTextAttribute()
    {
        switch ($this->status) {
            case '0':
                $status_text = "Pending";
                break;
            case '1':
                $status_text = "Approved";
                break;
            case '2':
                $status_text = "Rejected";
                break;
            default:
                $status_text = "Undefined";
                break;
        }
        return $status_text;
    }
}
