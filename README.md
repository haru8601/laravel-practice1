# laravel 練習

## 概要

## 起動・停止

起動

```
$ docker-compose up -d
```

停止

```
$ docker-compose down
```

## URL

index.php  
http://localhost:9000

pgadmin  
http://localhost:5050

## ディレクトリ構成

- php なコンテンツは./app に配置となります
- nginx の設定は./nginx/site.conf

```
.
├── app
│   └── index.php
├── nginx
│   └── site.conf
├── pgadmin
├── pgsql
│   └── data
│       └── .gitkeep
├── docker-compose.yml
├── .gitignore
└── README.md
```

## pgadmin への接続

デフォルトのログインアカウントは以下の通り

```
USER：user@domain.com
PASS：SuperSecret
```

データベースの追加は以下の通り

```
サーバー名：自由に決めて
HOSTNAME：pgsql
DBNAME：postgres
USERNAME：postgres
PASSWORD：example
PORT:5432
```
