<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const INACTIVE = 0;
    const ACTIVE   = 1;

    protected $table = 'categories';

    public function childrens()
    {
        return $this->hasMany(Category::class, 'cat_parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'cat_parent_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'po_category', 'id');
    }
}
