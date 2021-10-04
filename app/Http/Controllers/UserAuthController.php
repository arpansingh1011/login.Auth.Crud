<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Models\role;


class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
      
    }

      
    function register(){
        $info=role::all();

        return view('auth.register',['data'=>$info]);

    }
    function show(){
        $data= User::all();
        return view('auth.list',['users'=>$data]);
    }
    public function loginuser(){
        return view('auth.dashboard');
    }
    public function addrole(){
        return view('auth.addrole');
    
    }
    public function delete($id){
        $data=User::find($id);
        $data->delete();
        return redirect('list');
    }
    public function showdata($id){
        $data=User::find($id);
        return view('auth.update',['data'=>$data]);
    }
    public function createrole(Request $request){
        $roles = new role();
        $roles->role = $request->role;   
        $res = $roles->save();
        return view('auth.Roleuser');
    }
    
    public function update(Request $req){
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return redirect('/list');
    }
    
    
    function role(){
        $data= User::all();
        return view('auth.role',['users'=>$data]);
    }
    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $user = new User();
        $me=new role();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role=$request->role;
        $query = $user->save();

        if($query){
            return back()->with('success','You have been successfully registered');
        }else{
            return back()->with('fail','Something went wrong');
        }

    }
}
