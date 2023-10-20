<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recoveries extends Model
{
    use HasFactory;

    protected $fillable = [
        'debtor_id',
        'type',
        'status',
    ];
}
