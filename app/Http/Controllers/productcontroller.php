<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class productcontroller extends Controller
{
    //
    function index()
    {
        return users::all();
    }
}
