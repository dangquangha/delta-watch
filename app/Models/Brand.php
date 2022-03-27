<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'brands';

    public function products()
    {
        return $this->hasMany(Product::class, 'po_brand', 'id');
    }
}
