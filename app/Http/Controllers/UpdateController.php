<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    //
    function showdata($id){
        $data= User::find($id);
        if(Auth::user()->role_id == 1){
            return view('updaterole',['data'=>$data]);
        }
    }

    function update(Request $request){
        $data = User::find($request->id);
        $data->role_id= $request->role;
        $data->save();
        return redirect('accountedit');
    }
}
