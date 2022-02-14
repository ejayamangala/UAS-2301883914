<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index(){
        return view ('register', [
            'title' => 'register'
        ]);
    }

    public function db(Request $request){

        $file =  $request->file('displaypicture');
        $imageName = time().'_'.$file->getClientOriginalName();

        Storage::putFileAs('public/images',$file,$imageName);
        $imagePath = 'images/'.$imageName;

        $request->validate([
            'role' => 'required|integer',
            'gender' => 'required|integer',
            'firstname' => 'alpha|required|max:25',
            'middlename' => 'alpha|nullable|max:25',
            'lastname' => 'alpha|required|max:25',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
            'displaypicture' => 'required',
        ]);

        $request['password'] = bcrypt($request['password']);

        $user = new User;
        $user->role_id = $request->role;
        $user->gender_id= $request->gender;
        $user->first_name = $request->firstname;
        $user->middle_name = $request->middlename;
        $user->last_name = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->display_picture_link = $imagePath;
        $user->delete_flag = 1;
        $user->modified_at = '20220215';
        $user->modified_by = 'Edward J.P';

        $user->save();
        return redirect('/home')->with('success','Registration Successfull !!!');
    }
}
