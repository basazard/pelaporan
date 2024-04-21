# How to running project

# Clone this repository

1. Clone your project
2. Go to the folder application using cd command on your cmd or terminal
3. Run composer install on your cmd or terminal
4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt
5. Windows or cp .env.example .env if using terminal, Ubuntu
6. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and 
password (DB_PASSWORD) field correspond to your configuration.
7. Run php artisan key:generate
8. Run php artisan migrate
9. Run php artisan serve
10. Go to http://localhost:8000/
