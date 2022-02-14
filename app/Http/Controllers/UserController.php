<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        if(Auth::user()->role_id == 1){
            return view('profiladmin' ,[
                'user' =>$user]
            );

        }elseif(Auth::user()->role_id == 2){
            return view('profil')->with('user', auth()->user());
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */


    public function edit(User $user)
    {
        //
        $data['user'] = $user;
        if(Auth::user()->role_id == 1){
            return view('profiladmin')->with('user', auth()->user());
        }
        elseif(Auth::user()->role_id == 2){
            return view('profil')->with('user', auth()->user());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, User $user)
    {
        //

        $file =  $request->file('displaypicture');
        $imageName = time().'_'.$file->getClientOriginalName();

        Storage::putFileAs('public/images',$file,$imageName);
        $imagePath = 'images/'.$imageName;

        $request->validate([
            'gender' => 'required|integer',
            'firstname' => 'alpha|max:25',
            'middlename' => 'alpha|nullable|max:25',
            'lastname' => 'alpha|max:25',
            'email' => 'email:dns',
            'password' => 'required|min:8',
            'displaypicture' => 'required',
        ]);

        $request['password'] = bcrypt($request['password']);
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
        if(Auth::user()->role_id == 1){
            return view('savedadmin');
        }elseif(Auth::user()->role_id == 2){
            return view('saved');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect('/accountedit')->with('success', 'Delete User Berhasil');
    }
}
