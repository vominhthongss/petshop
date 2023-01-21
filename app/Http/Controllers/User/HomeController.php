<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
        return view('user.page.home.index', ['product' => ['Wiska',  'Drum']]);
    }
}
