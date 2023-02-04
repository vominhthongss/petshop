<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    function index($id)
    {
        return view('user.page.detailproduct.index', ['id' => [$id]]);
    }
}
