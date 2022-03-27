<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;

class HomeController extends Controller
{
    protected $product;
    protected $brand;

    public function __construct(Product $product,
                                Brand $brand)
    {
        parent::__construct();
        $this->product = $product;
        $this->brand   = $brand;
    }

    public function index()
    {
        $viewData = [
            'productsNew'      => $this->product->orderBy('id', 'desc')->limit(15)->get(),
            'productsForMan'   => $this->product->where('po_gender', '=', Product::GENDER_MALE)->limit(15)->get(),
            'productsForWoman' => $this->product->where('po_gender', '=', Product::GENDER_FEMALE)->limit(15)->get(),
            'productsHot'      => $this->product->where('po_hot', '=', Product::HOT_ACTIVE)->limit(15)->get(),
            'brands'           => $this->brand->get()
        ];

        return view('pages.home.index')->with($viewData);
    }

    public function getProductsByBrand($slug)
    {
        $brand = $this->brand->where('br_slug', '=', $slug)->first();
        $products = $this->product->where('po_brand', '=', $brand->id)->limit(12)->get();

        return view('pages.home.components.list_products_by_brand')->with(['products' => $products])->render();
    }
}
