<?php

namespace swepcommerce;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'address', 'phone_no', 'alt_phone_no'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function createUser($name, $email, $password, $username, $address, $phoneNo, $altPhoneNo, $picture){
        $user = DB::table('users')->insert(['name'=>''.$name, 'email'=>''.$email, 'password'=>''.$password, 'username'=>''.$username, 'address'=>''.$address, 'phone_no'=>(double)$phoneNo, 'alt_phone_no'=>(double)$altPhoneNo, 'picture'=>'images/'.$picture]);
        return "user Created";
    }

    public static function getUser($user_id){
        $user = DB::table('users')->where('id', '=', $user_id)->first();
        return $user;
    }

    public static function getUsers(){
        $users = DB::table('users')->get();
        return $users;
    }

    public static function editUser($user_id, $name, $email, $password, $username, $address, $phoneNo, $altPhoneNo){
        $user = DB::table('users')->where('id', '=', $user_id)->update(['name'=>''.$name, 'email'=>''.$email, 'password'=>''.$password, 'username'=>''.$username, 'address'=>''.$address, 'phone_no'=>(double)$phoneNo, 'alt_phone_no'=>(double)$altPhoneNo]);
        return $user;
    }

    public static function getUserByLogin($username, $password){
        $user = DB::table('users')->where('username', '=', $username)->where('password', '=', $password)->first();
        return $user;
    }
}
