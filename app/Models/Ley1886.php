<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ley1886 extends Model
{
    use HasFactory;

    protected $dateFormat = 'd-m-y H:i:s';

    protected $primaryKey = 'idLey1886';

    protected $guarded = ['idLey1886'];
}
