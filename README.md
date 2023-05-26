# 課題内容

## クローンしたいディレクトリでGITクローンする
```bash
git clone https://github.com/candypopbeat/try_laravel_movie_search.git ./
```
<br>

## .envファイル作成
```bash
cp .env.example .env
```
<br>

## .envファイルでDBの設定をする、下記のような感じ
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={用意したDB名}
DB_USERNAME=root
DB_PASSWORD={MAMPだとroot、XAMPPだと空}
```
<br>

## コンポーザーをアップデートする
```bash
composer update
```
<br>

## コンポーザーを使って必要なライブラリをインストールする
```bash
composer install
```
<br>

## LaravelのAPP_KEYキーを設定する
```bash
php artisan key:generate
```
<br>

## npmをアップデートする
```bash
npm update
```
<br>

## node_modulesをインストールする
```bash
npm install
```
<br>

## マイグレーションしてDB構築をする
```bash
php artisan migrate
```
<br>

## サーバーを起動する
```bash
php artisan serve
```
<br>

## リアルタイムコンパイルを実行する
```bash
npm run dev
```
<br>

## ブラウザからアクセスして Laravel の起動確認をする
[http://localhost:8000](http://localhost:8000)
<br>

## 映画APIサービスの「TMDb」でAPIキーを取得する
### 参考
[https://chocolat5.com/ja/tips/tmdb-api/](https://chocolat5.com/ja/tips/tmdb-api/)
<br>

## .env に TMDb で取得したキーをセットする
```bash
TMDB_APP_KEY={api_key}
```
<br>

## ブラウザからアクセスして「ドラゴンボール」の映画情報結果が現れるか確認する
[http://localhost:8000](http://localhost:8000)
<br>
<br>

# ナビバーの検索窓から検索した映画情報一覧が現れるように修正せよ！