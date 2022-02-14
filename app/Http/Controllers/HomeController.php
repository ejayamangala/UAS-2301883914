<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public static function index(){

        if(Auth::user()->role_id == 1){
            return view('homeadmin', ['ebook' => Ebook::all()]);
        }
        if(Auth::user()->role_id == 2){
            return view('homeuser', ['ebook' => Ebook::all()]);
        }

    }

    public function accountedit()
    {
        if(Auth::user()->role_id == 1){
            return view ('accountedit', [
                'title' => 'accountedit'
            ], ['user' => User::all()]);
        }
    }


}
