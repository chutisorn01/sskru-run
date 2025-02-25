<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
    //
    $profile = New Profile();
    $profile ->name = $request->name;
    $profile ->username = $request->username;
    $profile ->password = Hash::make($request->password);
    $profile ->dob = $request->dob;
    $profile ->phone = $request->phone;
    $profile ->email = $request->email;
    $profile ->profilepic = $request->profilepic;

    $profile ->save();
    return redirect() ->intended(route('loginsskrurun'));

    }
    public function login(Request $request)
    {
        
        $profile = Profile::where(['username'=>$request->username])->get();
       
        if (count($profile) != 1)
        {
            return redirect()->route('loginsskrurun');
        }
        else
        {
            if(Hash::check($request->password,$profile[0]->password))
            {
            session(['username'=> $profile[0]->username,'name'=> $profile[0]->name,'profilepic'=> $profile[0]->profilepic,'id'=> $profile[0]->id,'role'=>'admin']);
            return redirect()->route('button.index');
            }
            
            else
            {
            return redirect()->route('loginsskrurun');   
            }

        }
    }
}
