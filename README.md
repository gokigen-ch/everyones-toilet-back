# everyones-toilet-back

## install
- cd {レポジトリのルートディレクトリ}
- docker-compose build
- docker-compose up -d
- docker exec -it et-app composer install
- docker exec -it et-app cp .env.example .env
- docker exec -it et-app php artisan key:generate
- docker exec -it et-app php artisan migrate

## 普段
- cd {レポジトリのルートディレクトリ}
- docker-compose up -d
