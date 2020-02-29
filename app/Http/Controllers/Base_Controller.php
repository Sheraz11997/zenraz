<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Base_Controller extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }
}
