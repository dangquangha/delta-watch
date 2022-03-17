<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const GENDER_BOTH   = 0;
    const GENDER_MALE   = 1;
    const GENDER_FEMALE = 2;

    const HOT_ACTIVE   = 1;
    const HOT_INACTIVE = 0;

    protected $table = 'products';
}
