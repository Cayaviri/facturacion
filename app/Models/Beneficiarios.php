<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiarios extends Model
{
    use HasFactory;

    protected $dateFormat = 'd-m-y H:i:s';

    protected $primaryKey = 'idBeneficiario';

    protected $guarded = [];
}
