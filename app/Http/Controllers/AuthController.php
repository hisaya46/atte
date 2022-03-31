<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //会員登録フォーム
    public function getRegister()
    {
        return view('register');
    }
    //会員登録処理
    public function postRegister(Request $request)
    {
        //Userというクラスの中の$rules(バリデーション)を参照
        $this->validate($request, User::$rules);
        //DBにインサート
        $user = new User;
        $user->name = $request->name;
        $user->mail_address = $request->mail_address;
        $user->password = $request->password;
        //入力された内容を保存
        $user->save();
        //ログインフォームに遷移
        return view('login');
    }

    //ログインフォーム
    public function getLogin()
    {
        return view('login');
    }
    //ログイン処理
    public function postLogin(LoginFormRequest $request)
    {
        $email = $request->mail_address;
        $password = $request->password;

        if (Auth::attempt(['mail_address' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect('/')->with('login_success', 'ログイン-OK!!');
            // return redirect()->intended('/');
        }
        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }
}
