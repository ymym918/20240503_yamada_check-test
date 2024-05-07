＃＃お問い合わせフォーム

＃環境構築
＜Dockerビルド＞
例：git clone git@github.com:coachtech-material/laravel-docker-template.git
１．　git clone リンク　　　　　　←GitHubで作成したリンクを貼り付ける！
２．　docker-compose up -d —build

＊　MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて
　 docker-compose.ymlファイルを編集してください。

＜Laravel環境構築＞
１．　docker-compose exec php bash
２．　composer install
３．　.env exampleファイルから.envを作成し、環境変数を変更
４．　　php artisan key:generate
５．　　php artisan migrate
６．　　php artisan  db:seed

＃使用技術
⚫︎PHP 　　　　　　　　　　　8.3.3
⚫︎Laravel 　　　8.83.27
⚫︎MySQL 　　　　　　　8.0.26

＃ER図
作成したER図の画像を添付する

URL
⚫︎開発環境　　　　　　　　：http://localhost/
⚫︎phpMyadmin　：http://localhost:8080/
