<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function affichageUsers(){
        $users = User::all();
        return view('home',['lists'=>$users]);
    }
    public function ajouterUser(Request $request){
          $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);
    
        User::create($request->all());
    }
    public function show(){
        return 'Hello Show';
    }
}
