<?php

namespace swepcommerce\Http\Controllers;

use Illuminate\Http\Request;
use swepcommerce\User;

class PagesController extends Controller
{
    public function index(){
        return view("home");
    }

    public function faq(){
        return view('faq');
    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }
}
