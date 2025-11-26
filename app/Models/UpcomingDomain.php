<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UpcomingDomain extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'domain';
    public $incrementing = false;
    protected $keyType = 'string';
}
