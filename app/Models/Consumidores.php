<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumidores extends Model
{
    use HasFactory;

    protected $primaryKey='idConsumidor';

    protected $dateFormat = 'd-m-y H:i:s';

    protected $guarded = [];
}
