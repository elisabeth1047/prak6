<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $data = [
            ['id' => 1, 'nama' => 'Produk A'],
            ['id' => 2, 'nama' => 'Produk B'],
        ];

        return view('list_product', ['data' => $data]);
    }
}
