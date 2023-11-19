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
        $validator = Validator::make($request->all(),[
            'email' => 'email|unique:users|max:255|required',
            'name' => 'min:3|max:255|required',
            'tel' => 'min:18|max:18|required|unique:users',
            'password' => 'min:6|required',
        ],[
            'email.email' => 'Невалидный адрес Email',
            'email.unique' => 'Этот Email уже зарегистрирован',
            'email.max' => 'Email максимум 255 символов',
            'email.required' => 'Email Обазятелен к заполнению',
            'name.min' => 'Имя не меньше 3 символов',
            'name.max' => 'Имя не больше 255 символов',
            'name.required' => 'Имя обязательно к заполнению',
            'tel.min' => 'Некорректный номер телефона',
            'tel.max' => 'Некорректный номер телефона',
            'tel.unique' => 'Этот номер телефона уже зарегистрирован',
            'tel.required' => 'Телефон обязателен',
            'password.min' => 'Пароль минимум 6 символов',
            'password.required' => 'Пароль обязателен к заполнению',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User($validator->validated());

        if (!$user->save()){
            return redirect()->back()->with('user', 'При создании аккаунта произошла ошибка, попробуйте снова');
        }

        return redirect()->route('auth.login')->with('success', 'Аккаунт будет активен после модерации');
    }
    public function userLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login'); 
    }
}
