<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suministros extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSuministro';

    protected $dateFormat = 'd-m-y H:i:s';

    protected $guarded = [];
}
