<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\Order;
use App\Models\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function get_product()
    {
        return Category::with('Product')->get();
    }

    public function single_order()
    {
        return User::with('Product')->get();
    }
}
