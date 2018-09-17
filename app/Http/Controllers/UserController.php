<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;

class UserController extends Controller
{
    public function currentUser(Request $request)
    {
        // 辅助函数
        $user = auth()->user();
        
        // Facade
        $user = JWTAuth::parseToken()->authenticate();
        Auth::check();
        return response($user);
    }

    public function modify(Request $request)
    {
        return 0;
    }

}