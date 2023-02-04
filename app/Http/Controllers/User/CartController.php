<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index($username)
    {
        return view('user.page.cart.index', ['username' => $username]);
    }
}
