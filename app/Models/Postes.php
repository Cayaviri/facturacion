<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postes extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPoste';

    protected $dateFormat = 'd-m-y H:i:s';

    protected $guarded = [];
}
