@extends('layouts.app2')

@section('title')
<title>Login</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('button')
<div class="header-button"><button class="header-button-submit"><a href="/register">register</a></button></div>
@endsection

@section('content')
    <main>
        <div class="login-form_content">
            <div class="login-form_heading">
                <h2>Login</h2>
            </div>
            <form class="login_form" action="/auth/admin" method="post">
                @csrf
            <div class="login_form-content">
                <div class="login_form-content-email">
                    <div class="login_form-content-email-title">メールアドレス</div>
                    <div class="login_form-content-email-form">
                        <input class="email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="login_form-content-password">
                    <div class="login_form-content-password-title">パスワード</div>
                    <div class="login_form-content-password-form">
                        <input class="password" type="password" name="password" placeholder="例:coachtech1106">
                    </div>
                    <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="login_button">
                <button class="login_button-submit" type="submit">ログイン</button>
            </div>
        </form>
        </div>
@endsection
