<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public $successStatus = 200; 
    
    /**
     * login api
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function login(){ 
        
        if(Auth::attempt(['mobile' => request('mobile'), 'password' => request('password')])){
            $user = Auth::user(); 
            $success['token'] = $user->createToken('MyApp')->accessToken; 
            return response()->json(['success' => $success], $this->successStatus); 
            
        } else{ 
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
    
    
    /**
     * Register api 
     * 
     *  @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) {
        $validator = Validator::make(
            $request->all(), 
            [ 
//                'mobile' => 'required|mobile',
//                'email' => 'required|email',
                'password' => 'required',
                'c_password' => 'required|same:password',
            ]
        ); 
        if ($validator->fails()) { 
            return response()->json([
                'error'=>$validator->errors()
            ], 401); 
        } 
        
        $input = $request->all(); 
        $input["name"] = preg_replace("/^(\d{3}).*?(\d{4})$/", "\\1****\\2", $input["mobile"]) . "(暂无昵称)";
        $input["email"] = preg_replace("/^\d{3}(.*?)\d{4}$/", "\\1", $input["mobile"]) . "@temp.com";
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken; 
        $success['name'] = $user->name;
        
        return response()->json(['success'=>$success], $this->successStatus);
    } 
    
    
    /**
     * details api
     * 
     * @return 
     * \Illuminate\Http\Response 
     */ 
    public function details() { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this->successStatus);
    }

}
