# txtai_rest
Recommendation system using rest api (combination of flask and laravel frameworks)
requirements: php8.2, python3.8+, Mysql

Intstruction: 
Laravel
======================
cd laravel-htmx-todolist/; 
composer install; 
composer update; 
php artisan serve; 

Flask
----------------------
source djn/bin/activate;
python3 -m pip install txtai[all] pandas; 
cd recomendations/; 
python3 testapi.py; 

Database setup:
---------
use db_backups/ for "txtai" database 
change ***.env*** file in laravel-htmx-todolist/ ***(username, password for db)***

