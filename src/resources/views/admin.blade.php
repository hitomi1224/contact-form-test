@extends('layouts.app2')

@section('title')
<title>Admin</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')

<div class="header-button">
    <form action="/logout" method="post">
    @csrf
    <button class="header-button-submit">logout</button>
    </form>
</div>
@endsection


@section('content')
        <div class="admin-form_content">
            <div class="admin-form_heading">
                <h2>Admin</h2>
            </div>
            <div class="search-form">
                <div class="search-form_name-email">
                    <input class="search-form_input" type="text" name="search-form_input" placeholder="名前やメールアドレスを入力してください">
                </div>
                <div class="select-gender">
                    <select class="gender" name="gender">
                        <option value="option1" selected>性別</option>
                        <option value="option2" >全て</option>
                        <option value="option3" >男性</option>
                        <option value="option4" >女性</option>
                        <option value="option5" >その他</option>
                    </select>
                </div>
                <div class="select-kind">
                    <select class="kind" name="kind">
                        <option value="option1" selected>お問い合わせの種類</option>
                        <option value="option2" >商品のお届けについて</option>
                        <option value="option3" >商品の交換について</option>
                        <option value="option4" >商品トラブル</option>
                        <option value="option5" >ショップへのお問い合わせ</option>
                        <option value="option6" >その他</option>
                    </select>
                </div>
                <div class="select-date">
                    <input class="date" type="date"></input>
                </div>
                <div class="search_button">
                    <button class="search_button-submit" type="submit"><a href="">検索</a></button>
                </div>
                <div class="reset_button">
                    <button class="reset_button-submit" type="submit"><a href="/admin">リセット</a></button>
                </div>
            </div>
            <div class="option_button">
                <div class="export_button">
                    <button class="export_button-submit" type="submit"><a href="">エクスポート</a></button>
                </div>
                <div class="page_button">
                    <ul class="pagenation">
                        <li class="pagenation-item">
                            <a class="pagenation-item-link" href="/admin"><</a>
                        </li>
                        <li class="pagenation-item">
                            <a class="pagenation-item-link" href="/admin">1</a>
                        </li>
                        <li class="pagenation-item">
                            <a class="pagenation-item-link" href="/admin/2">2</a>
                        </li>
                        <li class="pagenation-item">
                            <a class="pagenation-item-link" href="/admin/3">3</a>
                        </li>
                        <li class="pagenation-item">
                            <a class="pagenation-item-link" href="/admin/4">4</a>
                        </li>
                        <li class="pagenation-item">
                            <a class="pagenation-item-link" href="/admin/5">5</a>
                        </li>
                        <li class="pagenation-item">
                            <a class="pagenation-item-link" href="/admin/5">></a>
                        </li>
                    </ul>
                </div>
            </div>
            <table class="admin-table">
                <tr class="admin-table-head">
                    <th class="admin-table-head_name">お名前</th>
                    <th class="admin-table-head_gender">性別</th>
                    <th class="admin-table-head_email">メールアドレス</th>
                    <th class="admin-table-head_kind">お問い合わせの種類</th>
                    <th class="admin-table-head_more"></th>
                </tr>
                <tr class="admin-table-content">
                    <td class="admin-table-content_data">山田 太郎</td>
                    <td class="admin-table-content_data">男性</td>
                    <td class="admin-table-content_data">test@example.com</td>
                    <td class="admin-table-content_data">商品の交換について</td>
                    <td class="admin-table-content_data">
                        <div class="admin-table-content_data-more">
                            <button class="admin-table-content_data-more_button" type="submit"><a href="#modal1">詳細</a>
                            </button>
                            <div id="modal1" class="modal1">
                                <div class="modal-content">
                                    <div class="close-button">
                                        <a href="#" class="close-button_submit" type="submit">✕</a>
                                    </div>
                                    <table class="modal-content-table">
                                        <tr class="modal-content-table_name">
                                            <th class="modal-content-table_title">お名前</th>
                                            <td class="modal-content-table_data">山田 太郎</td>
                                        </tr>
                                        <tr class="modal-content-table_gender">
                                            <th class="modal-content-table_title">性別</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_email">
                                            <th class="modal-content-table_title">メールアドレス</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_tell">
                                            <th class="modal-content-table_title">電話番号</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_address">
                                            <th class="modal-content-table_title">住所</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                            <tr class="modal-content-table_building">
                                            <th class="modal-content-table_title">建物</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_kind">
                                            <th class="modal-content-table_title">お問い合わせの種類</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_detail">
                                            <th class="modal-content-table_title">お問い合わせ内容</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                    </table>
                                    <form class="delete-form" action="/auth/delete" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <div class="delete_button">
                                            <input type="hidden" name='id' value="{{ $content['id'] }}">
                                        <button class="delete_button-submit" type="submit">削除</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="admin-table-content">
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data">
                        <div class="admin-table-content_data-more">
                            <button class="admin-table-content_data-more_button" type="submit"><a href="#modal2">詳細</a></button>
                            <div id="modal2" class="modal2">
                                <div class="modal-content">
                                    <div class="close-button">
                                        <a href="#" class="close-button_submit" type="submit">✕</a>
                                    </div>
                                    <table class="modal-content-table">
                                        <tr class="modal-content-table_name">
                                            <th class="modal-content-table_title">お名前</th>
                                            <td class="modal-content-table_data">山田 太郎</td>
                                        </tr>
                                        <tr class="modal-content-table_gender">
                                            <th class="modal-content-table_title">性別</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_email">
                                            <th class="modal-content-table_title">メールアドレス</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_tell">
                                            <th class="modal-content-table_title">電話番号</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_address">
                                            <th class="modal-content-table_title">住所</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                            <tr class="modal-content-table_building">
                                            <th class="modal-content-table_title">建物</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_kind">
                                            <th class="modal-content-table_title">お問い合わせの種類</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_detail">
                                            <th class="modal-content-table_title">お問い合わせ内容</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                    </table>
                                    <div class="delete_button">
                                        <button class="delete_button-submit" type="submit"><a href="#">削除</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="admin-table-content">
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data">
                        <div class="admin-table-content_data-more">
                            <button class="admin-table-content_data-more_button" type="submit"><a href="#modal3">詳細</a></button>
                            <div id="modal3" class="modal3">
                                <div class="modal-content">
                                    <div class="close-button">
                                        <a href="#" class="close-button_submit" type="submit">✕</a>
                                    </div>
                                    <table class="modal-content-table">
                                        <tr class="modal-content-table_name">
                                            <th class="modal-content-table_title">お名前</th>
                                            <td class="modal-content-table_data">山田 太郎</td>
                                        </tr>
                                        <tr class="modal-content-table_gender">
                                            <th class="modal-content-table_title">性別</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_email">
                                            <th class="modal-content-table_title">メールアドレス</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_tell">
                                            <th class="modal-content-table_title">電話番号</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_address">
                                            <th class="modal-content-table_title">住所</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                            <tr class="modal-content-table_building">
                                            <th class="modal-content-table_title">建物</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_kind">
                                            <th class="modal-content-table_title">お問い合わせの種類</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_detail">
                                            <th class="modal-content-table_title">お問い合わせ内容</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                    </table>
                                    <div class="delete_button">
                                        <button class="delete_button-submit" type="submit"><a href="#">削除</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="admin-table-content">
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data">
                        <div class="admin-table-content_data-more">
                            <button class="admin-table-content_data-more_button" type="submit"><a href="#modal4">詳細</a></button>
                            <div id="modal4" class="modal4">
                                <div class="modal-content">
                                    <div class="close-button">
                                        <a href="#" class="close-button_submit" type="submit">✕</a>
                                    </div>
                                    <table class="modal-content-table">
                                        <tr class="modal-content-table_name">
                                            <th class="modal-content-table_title">お名前</th>
                                            <td class="modal-content-table_data">山田 太郎</td>
                                        </tr>
                                        <tr class="modal-content-table_gender">
                                            <th class="modal-content-table_title">性別</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_email">
                                            <th class="modal-content-table_title">メールアドレス</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_tell">
                                            <th class="modal-content-table_title">電話番号</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_address">
                                            <th class="modal-content-table_title">住所</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                            <tr class="modal-content-table_building">
                                            <th class="modal-content-table_title">建物</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_kind">
                                            <th class="modal-content-table_title">お問い合わせの種類</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_detail">
                                            <th class="modal-content-table_title">お問い合わせ内容</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                    </table>
                                    <div class="delete_button">
                                        <button class="delete_button-submit" type="submit"><a href="#">削除</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="admin-table-content">
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data">
                        <div class="admin-table-content_data-more">
                            <button class="admin-table-content_data-more_button" type="submit"><a href="#modal5">詳細</a></button>
                            <div id="modal5" class="modal5">
                                <div class="modal-content">
                                    <div class="close-button">
                                        <a href="#" class="close-button_submit" type="submit">✕</a>
                                    </div>
                                    <table class="modal-content-table">
                                        <tr class="modal-content-table_name">
                                            <th class="modal-content-table_title">お名前</th>
                                            <td class="modal-content-table_data">山田 太郎</td>
                                        </tr>
                                        <tr class="modal-content-table_gender">
                                            <th class="modal-content-table_title">性別</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_email">
                                            <th class="modal-content-table_title">メールアドレス</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_tell">
                                            <th class="modal-content-table_title">電話番号</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_address">
                                            <th class="modal-content-table_title">住所</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                            <tr class="modal-content-table_building">
                                            <th class="modal-content-table_title">建物</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_kind">
                                            <th class="modal-content-table_title">お問い合わせの種類</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_detail">
                                            <th class="modal-content-table_title">お問い合わせ内容</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                    </table>
                                    <div class="delete_button">
                                        <button class="delete_button-submit" type="submit"><a href="#">削除</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="admin-table-content">
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data">
                        <div class="admin-table-content_data-more">
                            <button class="admin-table-content_data-more_button" type="submit"><a href="#modal6">詳細</a></button>
                            <div id="modal6" class="modal6">
                                <div class="modal-content">
                                    <div class="close-button">
                                        <a href="#" class="close-button_submit" type="submit">✕</a>
                                    </div>
                                    <table class="modal-content-table">
                                        <tr class="modal-content-table_name">
                                            <th class="modal-content-table_title">お名前</th>
                                            <td class="modal-content-table_data">山田 太郎</td>
                                        </tr>
                                        <tr class="modal-content-table_gender">
                                            <th class="modal-content-table_title">性別</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_email">
                                            <th class="modal-content-table_title">メールアドレス</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_tell">
                                            <th class="modal-content-table_title">電話番号</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_address">
                                            <th class="modal-content-table_title">住所</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                            <tr class="modal-content-table_building">
                                            <th class="modal-content-table_title">建物</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_kind">
                                            <th class="modal-content-table_title">お問い合わせの種類</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_detail">
                                            <th class="modal-content-table_title">お問い合わせ内容</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                    </table>
                                    <div class="delete_button">
                                        <button class="delete_button-submit" type="submit"><a href="#">削除</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="admin-table-content">
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data"></td>
                    <td class="admin-table-content_data">
                        <div class="admin-table-content_data-more">
                            <button class="admin-table-content_data-more_button" type="submit"><a href="#modal7">詳細</a></button>
                            <div id="modal7" class="modal7">
                                <div class="modal-content">
                                    <div class="close-button">
                                        <a href="#" class="close-button_submit" type="submit">✕</a>
                                    </div>
                                    <table class="modal-content-table">
                                        <tr class="modal-content-table_name">
                                            <th class="modal-content-table_title">お名前</th>
                                            <td class="modal-content-table_data">山田 太郎</td>
                                        </tr>
                                        <tr class="modal-content-table_gender">
                                            <th class="modal-content-table_title">性別</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_email">
                                            <th class="modal-content-table_title">メールアドレス</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_tell">
                                            <th class="modal-content-table_title">電話番号</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_address">
                                            <th class="modal-content-table_title">住所</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                            <tr class="modal-content-table_building">
                                            <th class="modal-content-table_title">建物</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_kind">
                                            <th class="modal-content-table_title">お問い合わせの種類</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                        <tr class="modal-content-table_detail">
                                            <th class="modal-content-table_title">お問い合わせ内容</th>
                                            <td class="modal-content-table_data"></td>
                                        </tr>
                                    </table>
                                    <div class="delete_button">
                                        <button class="delete_button-submit" type="submit"><a href="#">削除</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
@endsection
