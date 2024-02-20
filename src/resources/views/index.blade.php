@extends('layouts.app')

@section('title')
<title>Contact Form</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
        <div class="contact-form_content">
            <div class="contact-form_heading">
                <h2>Contact</h2>
            </div>
        <div class="form">
        <form class="form-content" action="contacts/confirm" method="post">
            @csrf
        <table class="form-content-table">
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">お名前</div>
                <div class="form__label--required">※</div>
            </th>
            <td class="form__group-content">
                <div class="form__input--text">
                    <input class="last_name" type="name" name="last_name" placeholder="例:山田"  value="{{ old('last_name') }}"/>
                    <input class="first_name" type="name" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
                </div>
                <div class="error">
                    <div class="form__error-name">
                    @error('last_name')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="form__error-name">
                    @error('first_name')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">性別</div>
                <div class="form__label--required">※</div>
            </th>
            <td class="form__group-content">
                <div class="form__select-button">
                <label>
                    <input class="gender" type="radio" name="gender" value="{{ old('gender') }}" checked> 男性
                </label><br>
                <label>
                    <input class="gender" type="radio" name="gender" value="{{ old('gender') }}"> 女性
                </label><br>
                <label>
                    <input class="gender" type="radio" name="gender" value="{{ old('gender') }}"> その他
                </label>
                </div>
                <div class="form__error">
                @error('gender')
                    {{ $message }}
                @enderror
                </div>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">メールアドレス</div>
                <div class="form__label--required">※</div>
            </th>
            <td class="form__group-content">
                <div class="form__input--text">
                    <input class="email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                @error('email')
                    {{ $message }}
                @enderror
                </div>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">電話番号</div>
                <div class="form__label--required">※</div>
            </th>
            <td class="form__group-content">
                <div class="form__input--text">
                    <input class="tell" type="tell" name="tell" placeholder="080" value="{{ old('tell') }}" />
                <div class="tell-border">-</div>
                    <input class="tell" type="tell" name="tell" placeholder="1234" value="{{ old('tell') }}" />
                <div class="tell-border">-</div>
                    <input class="tell" type="tell" name="tell" placeholder="5678" value="{{ old('tell') }}"/>
                </div>
                <div class="form__error">
                @error('tell')
                    {{ $message }}
                @enderror
                </div>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">住所</div>
                <div class="form__label--required">※</div>
            </th>
            <td class="form__group-content">
                <div class="form__input--text">
                    <input class="address" type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3"  value="{{ old('address') }}"/>
                </div>
                <div class="form__error">
                @error('address')
                    {{ $message }}
                @enderror
                </div>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">建物名</div>
            </th>
            <td class="form__group-content">
                <div class="form__input--text">
                    <input class="building" type="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
                <div class="form__error">
                </div>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">お問い合わせの種類</div>
                <div class="form__label--required">※</div>
            </th>
            <td class="form__group-content">
                <div class="form__input--text">
                    <select class="content" name="content">
                        <option class="option1" name="content"  value="" selected>選択してください</option>
                        <option class="option2" value="{{ old('content') }}" >商品のお届けについて</option>
                        <option class="option3" value="{{ old('content') }}" >商品の交換について</option>
                        <option class="option4" value="{{ old('content') }}" >商品トラブル</option>
                        <option class="option5" value="{{ old('content') }}" >ショップへのお問い合わせ</option>
                        <option class="option6" value="{{ old('content') }}" >その他</option>
                    </select>
                </div>
                <div class="form__error">
                @error('content')
                    {{ $message }}
                @enderror
                </div>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__group-title">
                <div class="form__label--item">お問い合わせ内容</div>
                <div class="form__label--required">※</div>
            </th>
            <td class="form__group-content">
                <div class="form__input--textarea">
                    <textarea class="detail" name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                </div>
                <div class="form__error">
                @error('detail')
                    {{ $message }}
                @enderror
                </div>
            </td>
        </tr>
        </table>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
        </form>
        </div>
        </div>
@endsection





