# TrackMedds Dashboard


## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.6/installation#installation)


Clone the repository

    git clone https://github.com/NassirHenchiri/Trackmedds-Dashboard.git

Switch to the repo folder

    cd adminpanel-trackmedds

If you have linux system, you can execute the command below only in your project root

    1) sudo chmod -R 777 install.sh
    2) ./install.sh

If you have windows system, you can run Artisan Command for database setup, connection and configuration.

    php artisan install:app

Generate a new application key

    php artisan key:generate

Install Passport

    php artisan passport:install

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the database seeders

    php artisan db:seed

Install the javascript dependencies using npm

    npm install

Compile the dependencies

    npm run development

For generating the files of unisharp file manager

    php artisan vendor:publish --tag=lfm_public

For linking storage folder in public

    php artisan storage:link

Start the local development server

    php artisan serve


You can now access the server at http://localhost:8000

**Command list**

    git clone https://github.com/NassirHenchiri/Trackmedds-Dashboard.git
    cd adminpanel-trackmedds
    cp .env.example .env
    composer install
    npm install
    npm run development
    php artisan storage:link
    php artisan key:generate
    php artisan passport:install
    php artisan vendor:publish --tag=lfm_public
    php artisan migrate
    php artisan passport:install
    
 **wATCH demo**   
 https://www.youtube.com/watch?v=AStV-qyR8nE&t=635s
    
**Developement Team**

Henchiri Nassir <br>
Tabbene Mohamed <br>
Chikhaoui Firas
