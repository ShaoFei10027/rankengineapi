<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newAccount extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function list()
    {
    	return 0;
    }
}
