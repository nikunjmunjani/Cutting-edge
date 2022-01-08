<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    //
    /**
     * @return Load view
     * @author Nikunj Munjani
     * */
    public function index()
    {
       // echo Hash::make('admin');die;
        if(Auth::check()){
            return redirect('home');
        }
        return view('auth.login');
    }  
    /**  
     * @return Check login
     * @author Nikunj Munjani
     * */
    public function login(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
     
        if ($validator->fails()) {
            return response()->json(['status'=>0,'message'=>$validator->errors()->all()]);
        }
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json(['status'=>1,'message'=>'Login successfully.']);   
        }
        return response()->json(['status'=>0,'message'=>'The username and password you entered isn’t valid.']);
  
    }
    /**  
     * @return Load Home view
     * @author Nikunj Munjani
     * */
    public function home()
    {
        return view('presentation.index');
    }

    /**  
     * @return Load presentation view
     * @author Nikunj Munjani
     * */
    public function presentation()
    {
        return view('presentation.index');
    }

    /**  
     * @return Load breakouts view
     * @author Nikunj Munjani
     * */
    public function breakouts()
    {
        return view('breakouts.index');
    }
    
    /**  
     * @return logout
     * @author Nikunj Munjani
     * */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect('/');
    }
}
