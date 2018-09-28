<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->table = DB::table('user');
    }

    public function users()
    {
        return [
            [
              'key' => '1',
              'name' => 'John Brown',
              'age' => 32,
              'address' => 'New York No. 1 Lake Park',
            ],
            [
              'key' => '2',
              'name' => 'Jim Green',
              'age' => 42,
              'address' => 'London No. 1 Lake Park',
            ],
            [
              'key' => '3',
              'name' => 'Joe Black',
              'age' => 32,
              'address' => 'Sidney No. 1 Lake Park',
            ],
        ];
    }

    public function currentUser(Request $request)
    {
        Auth::check();
        $user = JWTAuth::parseToken()->authenticate();
        $name = DB::table('account')->where('id', $user['account_id'])->value('name');
        $user['name'] = $name;
        
        return $user;
    }

    public function changeBasic(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $uid  = $user['id'];
        $data = $request->all();
        return $this->table
            ->where('id', $uid)
            ->update($data);
    }

    public function changePassword(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $uid  = $user['id'];
        $old = $request->input('old_pass');
        $new = $request->input('new_pass');
        $pass = $this->table->where('id', $uid)->value('password');
        if(!Hash::check($old, $pass)){
            return response([
                'msg' => 'password is wrong!'
            ]);
        }
        $update = array(
            'password'  =>bcrypt($new),
        );
        return $this->table
            ->where('id', $uid)
            ->update($update);

    }

}