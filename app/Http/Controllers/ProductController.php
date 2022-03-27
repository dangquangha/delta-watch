<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function abort;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    protected $brand;

    public function __construct(Product $product,
                                Category $category,
                                Brand $brand)
    {
        parent::__construct();
        $this->product  = $product;
        $this->category = $category;
        $this->brand    = $brand;
    }

    public function product(Request $request)
    {
        $products = $this->product->orderBy('id', 'desc')->paginate(12);
        $viewData = [
            'products' => $products
        ];

        return view('pages.listing.index')->with($viewData);
    }

    public function showModal($id)
    {
        $product         = $this->product->where('id', '=', $id)->first();
        $relatedProducts = $this->product->where('po_brand', '=', $product->po_brand)
                                         ->whereNotIn('id', [$id])
                                         ->orderBy('id', 'desc')
                                         ->limit(7)->get();
        $viewData        = [
            'product'         => $product,
            'relatedProducts' => $relatedProducts,
        ];
        return view('components.modal_show_product')->with($viewData)->render();
    }

    public function switchSlug(Request $request)
    {
        $slug = $request->slug ?? null;

        $product = $this->product->where('po_slug', '=', $slug)->first();

        $category = $this->category->where('cat_slug', '=', $slug)
            ->with(['childrens'])
            ->first();

        $brand = $this->brand->where('br_slug', '=', $slug)->first();

        if ($product) {
            list ($view, $viewData) = $this->__getDataPageProduct($product);
            return view($view)->with($viewData);
        }

        if ($category) {
            list ($view, $viewData) = $this->__getDataPageCategory($category);
            return view($view)->with($viewData);
        }

        if ($brand) {
            list ($view, $viewData) = $this->__getDataPageBrand($brand);
            return view($view)->with($viewData);
        }

        abort(404);
    }

    private function __getDataPageProduct($product)
    {
        $view     = 'pages.detail.index';
        $viewData = [
            'product' => $product
        ];

        return [$view, $viewData];
    }

    private function __getDataPageCategory($category)
    {
        $view = 'pages.listing.index';

        if ($category->cat_parent_id == 0) {
            $subCategories = $category->childrens;
            $categoryIds   = [];
            foreach ($subCategories as $category) {
                $categoryIds[] = $category->id;
            }
            $products = $this->product->whereIn('po_category', $categoryIds);
        } else {
            $products = $category->products();
        }
        $viewData = [
            'products'  => $products->paginate(12),
            'metaTitle' => $category->cat_name
        ];

        return [$view, $viewData];
    }

    private function __getDataPageBrand($brand)
    {
        $view     = 'pages.listing.index';
        $viewData = [
            'products'  => $brand->products()->paginate(12),
            'metaTitle' => 'Đồng hồ ' . $brand->br_name
        ];

        return [$view, $viewData];
    }
}
