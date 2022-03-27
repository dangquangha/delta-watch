<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $cart = Session::get('cart') ?? [];
        $viewData = [
            'cart' => $cart,
        ];
        return view('pages.cart.index')->with($viewData);
    }

    public function add($id)
    {
        // Get product
        $product = $this->product->where('id', '=', $id)->first();
        if (!$product) {
            return response()->json([
                'message' => 'Sản phẩm không tồn tại'
            ]);
        }

        // Get cart
        $cart = Session::get('cart') ?? [];
        if ($cart[$id] ?? null) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name'     => $product->po_name,
                'slug'     => $product->po_slug,
                'image'    => $product->po_image,
                'quantity' => 1,
                'price'    => $product->po_price,
            ];
        }
        // Set cart
        Session::put('cart', $cart);

        // Render view
        $viewData = [
            'cart' => $cart,
        ];
        return view('components.cart')->with($viewData)->render();
    }

    public function remove($id)
    {
        $cart = Session::get('cart') ?? null;
        if ($cart[$id] ?? null) {
            unset($cart[$id]);
        }
        Session::put('cart', $cart);
        $viewData = [
            'cart' => $cart,
        ];
        return view('components.cart')->with($viewData)->render();
    }
}
