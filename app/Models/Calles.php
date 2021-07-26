<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calles extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCalle';

    protected $dateFormat = 'd:m:y H:i:s';

    protected $guarded = ['idCalle'];
}
