<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('home', [

        ]);
    }

    public function store(Request $request) {
        $validateDate = $request->validate([
            'name' => 'required|min:3|max:100',
            'size' => 'required|min:1|max:10',
            'price' => 'required',
            'image' => 'required',
        ]);

        Product::create($validateDate);
        return redirect('/')->with('ok', 'Product berhasil ditambahkan');
    }
}
