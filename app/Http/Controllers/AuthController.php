<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Requests;
use App\Transformers\UserTransformer;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;

class AuthController extends Controller
{
	protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function login(Request $request)
    {
        // 验证规则，由于业务需求，这里我更改了一下登录的用户名，使用手机号码登录
        $rules = [
            'name'   => 'required|string',
            'password' => 'required|string|min:6|max:20',
         ];

        // 验证参数，如果验证失败，则会抛出 ValidationException 的异常
        $params = $this->validate($request, $rules);

       // 使用 Auth 登录用户，如果登录成功，则返回 201 的 code 和 token，如果登录失败则返回
        return ($token = Auth::guard('api')->attempt($params))
            ? response(['token' => 'bearer ' . $token], 201)
            : response(['error' => '账号或密码错误'], 400);
    }

    public function logout()
    {
        Auth::guard('api')->logout();

        return response(['message' => '退出成功']);
    }

    public function register(Request $request)
     {
         $newUser = [
             'email' => $request->input('email'),
             'name' => $request->input('name'),
             'password' => bcrypt($request->input('password'))
         ];

         $user = User::create($newUser);
         $token = JWTAuth::fromUser($user);

         return response(['token' => 'bearer ' . $token], 201);
     }
}