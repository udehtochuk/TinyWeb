<<<<<<< HEAD
# TinyWeb - Laravel Import DemoApp

Requirements

This project uses the following packages and versions:
Laravel Framework: 8.x (compatible with 5.8, 6.x, 7.x, 8.x)
Composer packages:
maatwebsite/excel: 3.1.30
For Excel/CSV imports and exports
Requires phpoffice/phpspreadsheet 1.16.*

PHP 7.4 or higher
Composer
SQLite

All other dependencies are listed in composer.json and will be installed with

Setup: 
1. Copy the project to your directory:  
    cd TinyWeb
2. Install PHP dependencies:    
    composer install
3. Copy environment file: 
    copy .env.example .env 
4. Create SQLite database file: 
    database\database.sqlite
5. Run migrations to create tables: 
    php artisan migrate
6. Clear caches (Optional)
    php artisan cache:clear
    php artisan config:clear
    php artisan route:clear
    php artisan view:clear
7. Start the Application 
    php artisan serve
8. Open the Browser
    http://127.0.0.1:8000
=======
# TinyWeb
TinyWeb Project
>>>>>>> a950cd60e2512e9037b948d3acdb161e7d4eda97
