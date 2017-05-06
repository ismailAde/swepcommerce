<?php

namespace swepcommerce\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use swepcommerce\Http\Requests\CreateUserRequest;
use swepcommerce\Http\Requests\LoginUserRequest;
use swepcommerce\User;
use swepcommerce\Product;
class UsersController extends Controller
{

    public function profile($userId){
        //Validate User Access
        if((!Session::has('userStatus')) || (!Session::has('userId') || (Session::get('userStatus')!='active'))){

                return redirect(route('login_path'));
        }
        elseif(Session::get('userId') != $userId){
            return redirect(route('profile_path', ['id'=>Session::get('userId')]));
        }

        $user = User::getUser($userId);
        $products = Product::getProductsBySeller($userId);
        return view('profile', compact('user', 'products'));
    }


    public function checkUser(Request $request){
        $user = User::getUserByLogin($request->username, $request->password);
        return $user;
    }

    public function loginUser(LoginUserRequest $request){
        $user = self::checkUser($request);
        if($user != null){
            Session::put('userId', $user->id);
            Session::put('userStatus', 'active');
            return redirect(route('profile_path', ['id'=>$user->id]));
        }
        else{
            return redirect(route('login_path', ['error'=>'ld']));
        }
    }

    public function logoutUser(){
        // Clear session content before flushing(important)
        Session::forget('userId');
        Session::forget('userStatus');
        Session:flush();
        return redirect(route('login_path'));
    }

    public function signUp(CreateUserRequest $request){
        if($request->username=='' || $request->password==''){
            return redirect(route('signup_path', ['error'=>'sd']));
        }
        $user = User::createUser($request->name, $request->email, $request->password, $request->username, $request->address, $request->phone, $request->alt_phone, $request->tags);
        $login = ($user)? self::checkUser($request): null;
        return redirect(route('profile_path', ['id'=>$login->id]));
    }

}
