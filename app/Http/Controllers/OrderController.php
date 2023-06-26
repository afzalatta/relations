<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function user_order()
    {
         $users=  User::with('Order')->get();
        // dd($users);
         return view('relations.many_to_many', compact('users'));

    }


}
