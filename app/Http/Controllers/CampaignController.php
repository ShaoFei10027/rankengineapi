<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->table = DB::table('campaign');
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function getRecords(Request $request)
    {
    	
    	$account_id = $this->user['account_id'];
    	return $this->table
    		->where('account_id', $account_id)
    		->get();
    }

    public function create(Request $request)
    {
    	$data = $request->all();
        $account_id = $this->user['account_id'];
    	foreach ($data as $key => $value) {
    		if (is_array($value)){
    			$data[$key] = implode(",", $value);
    		}
    	}
        $data['account_id'] = $account_id;
        $id = $this->table->insertGetId($data);
        return $id;
    }
}