<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckPasswordController extends Controller
{
    public function createPassword(){

      return view('create_password');
    }

    public function updatePassword(Request $request){

        $password_env = env('PASSWORD_ROUTE');

       if ($password_env == $request->password){

           $user = User::find(auth()->user()->id);
           $user->update([
               'password_route'=> true
           ]);
           return redirect()->route('dashboard')->with('success', 'All links are now available');
       }
       else{
           return redirect()->back()->with('danger', 'The password is incorrect');
       }

    }
}
