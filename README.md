# アプリケーション名
お問合せフォーム
## 環境構築
- Dockerのビルドからマイグレーション、シーディングまでを記述する
- １.git clone リンク
- ２.docker-compose up -d --build
- MySQLは、OSによって軌道しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。
- Laravel環境構築
- １docker-compose exec php bash
- 2composer install
- 3.env.exampleファイルから.envを作成し、環境変数を変更
- ４php artisan key:generate
- 5php artisan migrate
- 6 php artisan db:seed
  

## 使用技術(実行環境)
- Laravel
- PHP
- MySQL



## URL
- 開発環境：http://localhost/
- phpMyAdmin:http://localhost:8080/
