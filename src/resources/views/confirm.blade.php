@extends('layouts.app')

@section('title')
<title>Confirm</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
        <div class="contact-form_content">
            <div class="contact-form_heading">
                <h2>Confirm</h2>
            </div>
            <form class="form" action="/contacts" method="post">
                @csrf
            <table class="contact-form_confirm" >
                <tr class="contact-form_confirm-group">
                    <th class="contact-form_confirm-name-title">お名前</th>
                    <td class="contact-form_confirm-name-content">
                        <input class="last_name" type="name" name="last_name" value="{{ $contact ?? ''['last_name'] }}" readonly />
                        <input class="first_name" type="name" name="first_name" value="{{ $contact ?? ''['first_name'] }}" readonly />
                    </td>
                </tr>
                <tr class="contact-form_confirm-group">
                    <th class="contact-form_confirm-gender-title">性別</th>
                    <td class="contact-form_confirm-gender-content">
                        <input type="gender" name="gender" value="{{ $contact ?? ''['gender'] }}" readonly />
                    </td>
                </tr>
                <tr class="contact-form_confirm-group">
                    <th class="contact-form_confirm-email-title">メールアドレス</th>
                    <td class="contact-form_confirm-email-content">
                        <input type="email" name="email" value="{{ $contact ?? ''['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="contact-form_confirm-group">
                    <th class="contact-form_confirm-tell-title">電話番号</th>
                    <td class="contact-form_confirm-tell-content">
                        <input type="tell" name="tell" value="{{ $contact ?? ''['tell'] }}" readonly />
                    </td>
                </tr>
                <tr class="contact-form_confirm-group">
                    <th class="contact-form_confirm-address-title">住所</th>
                    <td class="contact-form_confirm-address-content">
                        <input type="address" name="address" value="{{ $contact ?? ''['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="contact-form_confirm-group">
                    <th class="contact-form_confirm-building-title">建物</th>
                    <td class="contact-form_confirm-building-content">
                        <input type="building" name="building" value="{{ $contact ?? ''['building'] }}" readonly />
                    </td>
                </tr>
                <tr class="contact-form_confirm-group">
                    <th class="contact-form_confirm-content-title">お問い合わせの種類</th>
                    <td class="contact-form_confirm-content-content">
                        <input type="content" name="content" value="{{ $contact ?? ''['content'] }}" readonly />
                    </td>
                </tr>
                <tr class="contact-form_confirm-group-content">
                    <th class="contact-form_confirm-detail-title">お問い合わせ内容</th>
                    <td class="contact-form_confirm-detail-content">
                        <input type="detail" name="detail" value="{{ $contact ?? ''['detail'] }}" readonly />
                    </td>
                </tr>
            </table>
            <div class="confirm_button">
                <button class="confirm_button-submit" type="submit">送信</button>
                <a class="confirm_modify-button-submit" href="/">修正</a>
            </div>
            </form>
        </div>
@endsection