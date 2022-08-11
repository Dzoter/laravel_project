<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function login(Request $loginRequest)
    {

        $loginForm = $loginRequest->only('email','password');


        if (Auth::attempt(['email'=>$loginForm['email'],'password'=>$loginForm['password']])){
            return redirect()->route('posts-main');
        }

        return redirect()->route('login')->withErrors(['email'=>'Не удалось авторизоваться']);
    }
    public function registration(RegistrationRequest $registrationRequest)
    {
        if (User::where('email',$registrationRequest->input('registerEmail'))->exists()){
            return redirect()->route('registration')->withErrors(['registerEmail'=>'такая почта уже занята']);
        }
        $newUser = new User();
        $newUser->name = $registrationRequest->input('registerName');
        $newUser->email = $registrationRequest->input('registerEmail');
        $newUser->password = $registrationRequest->input('registerPassword');
        $newUser->save();

        return redirect()->route('login')->with('success','Регистрация успешна');

    }
}
