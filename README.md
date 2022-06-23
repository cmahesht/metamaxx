steps to deploy the project

1. install laravel application using below command
    
    => composer create-project laravel/laravel metamaxx --prefer-dist
    
2. update the database credentials by editinf .env file

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    
3. run below command to create the user/admin table

    => php artisan migrate
    

4. Install & Configure JWT Authentication Package

    => composer require tymon/jwt-auth
    
    
5.     
