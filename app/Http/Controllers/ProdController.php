<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\ProductsFilterRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdController extends Controller
{

    public function show(Product $product)
    {
        return view('prod', compact('product'));
    }

    public function get()
    {
    	$products = Product::get();
    	return view('product',  compact('products'));
    }

    public  function index(ProductsFilterRequest $request)
    {

        $productsQuery = Product::query();

        if ($request->filled('price_from')){
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')){
            $productsQuery->where('price', '<=', $request->price_to);
        }

        $products = $productsQuery->paginate(9)->withPath("?".$request->getQueryString());
        return view('index', compact('products'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

	public function categories()
    {
		$categories=Category::get();
		return view('categories', compact('categories'));
    }
}
