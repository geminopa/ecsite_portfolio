<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;

class ProductController extends Controller
{
    public function list()
    {
        $allBrands = Brand::all();
        $allCategories = Category::all();
        $allItems = Item::all();
        return view('list', [
            'brands' => $allBrands,
            'categories' => $allCategories,
            'allItems' => $allItems,
        ]);
    }

    public function detail(Request $request)
    {
        $item = Item::where('id', $request->id)->first();
        return view('detail', [
            'item' => $item,
        ]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function address()
    {
        return view('address');
    }

    public function complete()
    {
        return view('complete');
    }
}
