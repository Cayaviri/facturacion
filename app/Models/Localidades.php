<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    use HasFactory;

    protected $primaryKey = 'idLocalidad';

    protected $dateFormat='d-m-y H:i:s';

    protected $guarded = [];
}
