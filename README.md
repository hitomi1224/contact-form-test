# お問い合わせフォーム

## 環境構築

Dockerビルド
　
 1. git clone リンク: git@github.com:hitomi1224/contact-form-test.git
 2. docker-compose up -d --build

    ※MySQLはOSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

Laravel環境構築
  1. docker-compose exec php bash
  2. composer install
  3. .env.exampleファイルから.envを作成し、環境変数を変更
  4. php artisan key:generate
  5. php artisan migrate
  6. php artisan db:seed

## 使用技術
  -  PHP 7.4.9
  -  Laravel 8.83.8
  -  MySQL 8.0.26

## ER図
![スクリーンショット 2024-02-18 154805](https://github.com/hitomi1224/contact-form-test/assets/148037219/dce9d044-0905-45ed-981e-25f28ac92305)

## URL
　 
  -  開発環境   http://localhost/
                http://localhost/login
  -  phpMyAdmin  http://localhost:8080/
