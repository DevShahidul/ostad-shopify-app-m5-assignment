<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View{
        $shop = $request->user();
        $products = Product::where('shop_id', $shop->id)->get();
        return view('products.index', compact('products'));
    }

    public function create(Request $request): View{
        $shop = $request->user();
        $products = Product::where('shop_id', $shop->id)->get();
        return view('products.create', compact('products'));
    }

    public function store( Request $request): RedirectResponse {
        // $collectionId = $request->collectionId;
        $shop = $request->user();
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->shop_id = $shop->id;

        $product->save();

        return Redirect::away(URL::shopifyRoute('product.index'));

    }
}
