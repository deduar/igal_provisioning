<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deploit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ver',
        'leader_id',
        'startDate',
        'info_id',
        'credentials_id'
    ];
}
