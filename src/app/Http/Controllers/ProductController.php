<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Services\ProductService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        try {
            $items = Item::all();

            return view('list', [
                'items' => $items,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            throw $e;
        }
    }

    public function detail(Request $request)
    {
        $item = Item::where('id', $request->id)->first();
        return view('detail', [
            'item' => $item,
        ]);
    }

    public function search(Request $request)
    {
        $validator = ProductService::searchValidate($request);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $items = Item::where('name', 'LIKE', "%". $request->keyword ."%")->get();
        return view('list', [
            'items' => $items,
        ]);
    }
}
