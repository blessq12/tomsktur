<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function userLogin(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'email|max:255|required',
            'password' => 'required|min:6'
        ],[
            'email.email' => 'Невалидный адрес Email',
            'email.max' => 'Email должен быть не больше 255 символов',
            'email.required' => 'Поле email обязательно для заполнения',
            'password.required' => 'Поле пароль обязательно для заполнения',
            'password.min' => 'Пароль должен быть не меньше 6 символов'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('email', $request->email)->first();
        
        if (!$user){
            return redirect()->back()->with('user', 'Пользователь не найден');
        }
        if (!$user->active){
            return redirect()->back()->with('activation', 'Учетная запись проверяется администратором и еще неактивна')->withInput();
        }
        if (!Auth::attempt($validator->validated())){
            return redirect()->back()->with('user','Ошибка авторизации, повторите попытку позже');
        }
        return redirect()->route('main.index');
    }
    public function userRegister(Request $request){
        dd($request->all());
    }
    public function userLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login'); 
    }
}
