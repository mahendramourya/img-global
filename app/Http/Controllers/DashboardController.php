<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Session;

class DashboardController extends Controller
{
    public function loginForm(Request $request){
        if($request->isMethod('post')){

            $user = User::where('email',$request->email)->first();

            if( Hash::check( $request->password, $user->password ) )
            {
                $request->session()->put('userId', $user->id);
                //dd(Session::get('userId'));
                return response()->json(['status'=>true,'msg'=>'Login successfully']);
            
            }else{
                return response()->json(['status' => false, 'msg' => 'Invalid credentials']);
            }

            
        }
        return view('login');
    }

    
}
