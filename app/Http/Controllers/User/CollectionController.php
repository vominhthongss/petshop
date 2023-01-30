<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    function index($type)
    {
        return view('user.page.collection.index', ['type' => [$type]]);
    }
}
