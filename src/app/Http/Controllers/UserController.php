<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function store(AuthRequest $request)
    {
        $auth = $request->only(['name', 'email', 'password']);
        User::create($auth);

        return view('login');
    }

    public function login(AuthRequest $request)
    {
        $auth = $request->only(['email', 'password']);

        if (User::attempt($credentials)) {
            // ログイン成功時の処理
            return redirect()->intended('/admin'); // ログイン後のリダイレクト先を指定
        } else {
            // ログイン失敗時の処理
            return redirect('login');

        }
    }

    public function admin()
    {
        $authors = User::Paginate(7);
        return view('admin', ['authors' => $authors]);

    }

    public function find()
    {
        return view('admin', ['input' => '']);
    }

    public function search(AuthRequest $request)
    {
        $item = User::where('name', 'email', 'gender', 'content', 'date', 'LIKE',"%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('admin', $param);
    }

    public function destroy(AuthRequest $request)
    {
        User::find($request->id)->delete();
        return redirect('/admin');
    }

}
