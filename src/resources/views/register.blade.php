@extends('layouts.app2')

@section('title')
<title>Register</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
<div class="header-button"><button class="header-button-submit"><a href="/login">login</a></button></div>
@endsection

@section('content')
        <div class="register-form_content">
            <div class="register-form_heading">
                <h2>Register</h2>
            </div>
            <form class="register_form" action="/auth" method="post">
                @csrf
            <div class="register_form-content">
                <div class="register_form-content-name">
                    <div class="register_form-content-name-title">お名前</div>
                    <div class="register_form-content-name-form">
                        <input class="name" type="name" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}">
                    </div>
                    <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="register_form-content-email">
                    <div class="register_form-content-email-title">メールアドレス</div>
                    <div class="register_form-content-email-form">
                        <input class="email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="register_form-content-password">
                    <div class="register_form-content-password-title">パスワード</div>
                    <div class="register_form-content-password-form">
                        <input class="password" type="password" name="password" placeholder="例:coachtech1106">
                    </div>
                    <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="register_button">
                <button class="register_button-submit" type="submit">登録</button>
            </div>
        </form>
        </div>
@endsection

