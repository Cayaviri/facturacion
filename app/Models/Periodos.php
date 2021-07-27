<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    use HasFactory;

    protected $dateFormat = 'd-m-y H:i:s';

    protected $primaryKey = 'idPeriodo';

    protected $guarded = [];
}
