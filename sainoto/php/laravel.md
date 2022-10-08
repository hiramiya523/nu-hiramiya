# laravel インストール
- composer create-project --prefer-dist laravel/laravel:^9.0 example-app
  --prefer-dist はzip形式だったはず。確か早い
- cd example-app
- php artisan -V
  バージョン確認
- php artisan serve
```
breeze
  composer require laravel/breeze --dev
  php artisan breeze:install react
  npm install
  npm run dev
  php artisan serve
```

# laravel breeze インストール
- プロジェクト作成
  composer create-project --prefer-dist laravel/laravel breeze_react 
  php artisan -V
  cd breeze_react
  composer require laravel/breeze --dev
  php artisan breeze:install react
   npm install
   npm run dev
  php artisan serve


# laravel 基本
## コントローラの作成
- 作成
  ```
  app/Http/Controllers にコントローラファイルを作成
  php artisan make:controller Sample/IndexController
  ```

- シングルアクションコントローラの作成(1つのコントローラに、１つのエンドポイント)
  ```
  php artisan make:controller Tweet/IndexController --invokable
  ```

## blade
- resources/views フォルダ配下に、.blade.php拡張子でbladeファイルを作成する
- controllerクラスでview()を使いbladeを呼び出す


## migrate
- テーブル作成
  ```
  php artisan make:migration create_tweets_table
  ```
database/migrations にファイルが作成される

- up()メソッドでスキーマ、テーブルを定義
```
  // autoインクリメント、主キー
  $table->id();
  // 新規で追加する
  $table->string('content');
  // created_at, updated_atカラムを作成
  $table->timestamps();
```

- migration 実行
  php artisan migrate

### シーディング
- テストデータの作成
  ```
  php artisan make:seeder TweetsSeeder
  ```
  databas/sdders ディレクトリに作成される
  ので作成したいデータ形式を記述
  右DatabaseSeeder.phpのrun()に作成したシーだーを追加
  ↓
  php artisan db:seed
  個別呼び出しの場合は、
  php artisan db:seed --class=TweetsSeeder

## Eloquent
ORM, クラスがテーブルレコードと対の関係になる
- 作成( app/Models 配下にできる )
php artisan make:model Tweet

- 作成オプション
migration ファイルも一緒に生成
php artisan make:mokel Tweet --migratioin
php artisan make:mokel Tweet -m

モデルファクトリーも一緒に作成するパターン
php artisan make:mokel Tweet -f

シーダーも一緒に作成するパターン
php artisan make:mokel Tweet -s

コントローラも一緒に作成するパターン
php artisan make:mokel Tweet -c

上記全部まとめたパターン
php artisan make:mokel Tweet -mfsc

- eloquentモデル
  テーブル指定がない場合、スネークケースクラス名と複数形(s)のテーブルに対応する
  - 主キーのid名がidでなく、tweet_idの場合
      protected $primaryKey = 'tweet_id';
  - 主キーがauto increment出ない場合、以下の宣言が必要
    public $incrementing = false;
    
  - 主キーが文字列型である場合
    protected $key = ''string'

  - _at
    - 不要
      public $timestamps = false;
    - 別名
      const CREATED_AT = 'creation_date';
      const UPDATED_AT = ;
      

## Factory
- 作成
  php artisan make:factory TweetFactory --model=Tweet

- ダミーデータ
  上記生成ファイルの、definition()に生成データを記述

## FormReauest
リクエストデータのバリデーション、認証

- authorize()
  ユーザ情報の判別、認証判定

- rules()
  リクエストされる値を検証
  ex)文字数制限、必須項目
  required : 必須
  max:140 : 最大140文字
  詳細はドキュメント参照
  

## note
- env変更が反映されない場合キャッシュが残っている場合があるのでクリア
php artisan config:cache