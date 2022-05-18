HOW TO DEPLOY

docker compose up -d
php artisan migrate
php artisan db:seed

создайте файл .env и скопируйте все из .env.example
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=root
DB_USERNAME=lichirus
DB_PASSWORD=12345
