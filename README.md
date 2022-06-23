steps to deploy the project

1. Just rename .env.example file to .env file and update database credentials like below

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    
3. run below command to create the user/admin table

    => php artisan migrate
    
4. please refer attached postman collection to test the routes

    
