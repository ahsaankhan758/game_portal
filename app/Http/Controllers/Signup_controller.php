<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use App\Scratch_card; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class Signup_controller extends Controller 
{
public $successStatus = 200;
public $errorStatus = 401;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login()
    { 
        if(Auth::attempt(['email_address' => request('email_address'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        if(!(User::select()->where('email_address',$request->input('email_address'))->where('user_status',1)->first()))
        {
                    $validator = Validator::make($request->all(), [ 
                        'first_name' => 'required', 
                        'last_name' => 'required', 
                        'email_address' => 'required|email', 
                        'password' => 'required'
                       
                    ]);
            if ($validator->fails()) { 
                        return response()->json(['error'=>$validator->errors()], 401);            
                    }
            $input = $request->all(); 
                    $input['password'] = bcrypt($input['password']);
                    $input['user_status']=1; 
                    $user = User::create($input); 
                    $success['token'] =  $user->createToken('MyApp')-> accessToken; 
                    $success['first_name'] =  $user->first_name;
                    $success['last_name'] =  $user->last_name;
                    $success['email_address'] =  $user->email_address;
            return response()->json(['success'=>$success], $this-> successStatus); 
        }
        else
        {
            return response()->json(['status'=> $this-> errorStatus,'message'=>'Data Already Exists.']);
        }
    }
    // 
    public function sratch_list()
    {
            $data = array();
             $scratch_card_list = Scratch_card::select()->where('status',1)->get();
             foreach($scratch_card_list as $row)
             {
                   $success['scratch_id'] = $row->scratch_id;
                   $success['title'] = $row->title;
                   $success['thumbnail_img'] = asset('storage/'.$row->thumbnail_img);
                    array_push($data,$success);
              }
              return response()->json(['status'=>$this-> successStatus,'message'=>'get data successfully','data'=>$data]);
    }
    }

 
