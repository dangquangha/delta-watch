<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    protected $category;
    protected $brand;

    public function __construct(Category $category,
                                Brand $brand)
    {
        $this->category = $category;
        $this->brand = $brand;
    }

    public function getCategories()
    {
        return $this->category->where('cat_parent_id', '=', 0)
                              ->where('cat_status', '=', Category::ACTIVE)
                              ->with('childrens')
                              ->get();
    }

    public function getBrands()
    {
        return $this->brand->where('br_status', '=', Brand::ACTIVE)->get();
    }
}
