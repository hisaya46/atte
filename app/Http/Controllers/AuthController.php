<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //会員登録
    public function getRegister()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        //Userというクラスの中の$rulesを参照
        $this->validate($request, User::$rules);

        $user = new User;
        $user->name = $request->name;
        $user->mail_address = $request->mail_address;
        $user->password = $request->password;

        $user->save();
    }

    //ログイン
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(LoginFormRequest $request)
    {
        $credentials = $request->only('mail_address', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');

            return back()->withErrors([
                'login_error' => 'メールアドレスかパスワードが間違っています。',
            ]);
        }

    }
}
