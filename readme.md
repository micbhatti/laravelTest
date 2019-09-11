<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

</p>

After cloning the repo, please follow the following steps to install the project:

1. Install dependencies (at the root of the project):

    ```shell
    composer install
    ```
2. copy env file and modify your database details (database name, username, password) in that file (at the root of the project):

    ```shell
    cp .env.example .env
    ```
3. Run this command to create tables in database:
    ```shell
    php artisan migrate
    ```   
4.  Run this command to insert admin and default user record: 
    ```shell
    php artisan db:seed
    ```    
5. Run this command to generate key

    ```shell
    php artisan key:generate
    ```
6. Start PHP's built-in development server by running this command:
    ```shell
    php artisan serve
     ```
    

## Login Details
For admin use these details:

    username: admin@admin.com
    password: admin

For normal user use these details:

    username: username@username.com
    password: username

