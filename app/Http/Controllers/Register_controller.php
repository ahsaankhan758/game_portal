<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\User; 
use App\Scratch_card; 
use View;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Redirect;
use Validator;
use Session;

class Register_controller extends Controller
{
    //
    public function index(Request $request)
    {
         if($request->session()->has('loggedin'))
        {
    	  return redirect('dashboard');
        }
        else
        {
            return view('login'); 
        }
    }
    public function register()
    {
    	return view('register');
    }
    // 
    public function signup(Request $request)
    {
    	if(!(User::select()->where('email_address',$request->input('email_address'))->where('user_status',1)->first()))
    	{
    	
    		 $datavalidate = $request->validate([
                        'first_name'=>'required',
                        'last_name'=>'required',
                        'email_address'=>'required',
                        'password'=>'required'
       			 ]);
             $input = $request->all();
             $input['password'] = bcrypt($request->input(['password']));
             $input['user_status']= 1;
    		 User::Create($input);

    		 $msg="Successfully Registered.";
    		 $request->session()->flash('register',$msg);
    		 return redirect('/');

    	}
    	else
    	{
    		$msg = "This Email is Already Exists.";
    		$request->session()->flash('register',$msg);
    		 return redirect('register');
    	}

       
    }
    // 
    public function signin(Request $request)
    {
    	 if(Auth::attempt(['email_address' => request('email_address'), 'password' => request('password'),'user_status'=>'1']))
            { 

              $user = Auth::User();
              $success['first_name']=$user->first_name;
              $success['last_name']=$user->last_name;
              $success['email_address']=$user->email_address;
              $success['user_id']=$user->user_id;
              // print_r($success);die;
              Session::put('loggedin', $success);

               $msg="Login Successfully..!!!";
               $request->session()->flash('login_success',$msg);
               return Redirect::to('dashboard');
                 
            } 
            elseif(Auth::attempt(['email_address' => request('email_address'), 'password' => request('password'),'user_status'=>'0']))
            { 
                $msg="User has been blocked..!!!";
                $request->session()->flash('blocked_user',$msg);
                return redirect('/');
            }
            else
            { 
                $msg="Invalid Email or Password..!!!";
                $request->session()->flash('blocked_user',$msg);
                return redirect('/');
            } 
    }
    public function dashboard(Request $request)
    {
        if($request->session()->has('loggedin'))
        {
         $view = View::make('dashboard');
         $view->nest('child','templates.header');
         return $view;
        }
        else
        {
            return Redirect::to('/');
        }
    }
    // 
    public function scratch_card(Request $request)
    {
         if($request->session()->has('loggedin'))
        {
         $view = View::make('create_scratch_card');
         $view->nest('child','templates.header');
         return $view;
        }
        else
        {
            return Redirect::to('/');
        }
    }
    // 
    public function create_scratch_card(Request $request)
    {
         $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'prize' => 'required',
                'thumbnail_img' => 'required',
                'background_img'=>'required',
                'icon_img_1'=>'required',
                'icon_img_2'=>'required',
                'icon_img_3'=>'required',
                'winning_img'=>'required',
                'type'=>'required'
                                       ]);
         // image 1
         $img1 = $request->file('thumbnail_img');
         $thumbnail = rand() . '.' . $img1[0]->getClientOriginalExtension();
         $img1[0]->move(public_path('storage'),$thumbnail);
         // img 2
          $img2 = $request->file('background_img');
         $background = rand() . '.' . $img2[0]->getClientOriginalExtension();
         $img2[0]->move(public_path('storage'),$background);
         // img3
          $img3 = $request->file('icon_img_1');
         $icon1 = rand() . '.' . $img3[0]->getClientOriginalExtension();
         $img3[0]->move(public_path('storage'),$icon1);
          // img4
          $img4 = $request->file('icon_img_2');
         $icon2 = rand() . '.' . $img4[0]->getClientOriginalExtension();
         $img4[0]->move(public_path('storage'),$icon2);
          // img5
          $img5 = $request->file('icon_img_3');
         $icon3 = rand() . '.' . $img5[0]->getClientOriginalExtension();
         $img5[0]->move(public_path('storage'),$icon3);
         // // img6
          $img6 = $request->file('winning_img');
         $winning = rand() . '.' . $img6[0]->getClientOriginalExtension();
         $img6[0]->move(public_path('storage'),$winning);

         // 
          $form_data = array(
                                'title' => $request->title,
                                'description' => $request->description,
                                'prize' => $request->prize,
                                'thumbnail_img' => $thumbnail,
                                'background_img' => $background,
                                'scratch_icon_img1' => $icon1,
                                'scratch_icon_img2' => $icon2,
                                'scratch_icon_img3' => $icon3,
                                'winning_img'=> $winning,
                                'type' => $request->type,
                                'status'=>1
                                );
            Scratch_card::create($form_data);
            $msg = "Data Save Successfully.";
            $request->session()->flash('save', $msg);
            return redirect('scratch_card');

    }
    // 
     public function logout(Request $request) 
    {
        $request->session()->flush();
        return redirect('/');
    }
    // 
    public function scratch_card_detail(Request $request)
    {
        if($request->session()->has('loggedin'))
        {
             $data_get = Scratch_card::select()->where('status',1)->get();
             $view = View::make('detail_scratch',compact('data_get'));
             $view->nest('child','templates.header');
             return $view;
        }
        else
        {
            return Redirect::to('/');
        }
    }
}
