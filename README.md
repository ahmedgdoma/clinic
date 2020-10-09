# clinic project

This project was generated with [Laravel](https://laravel.com/) version 8.*

## How to Setup in docker

To get this system working you have to have the following prerequisites installed:
[docker](https://www.docker.com/),
[docker compose](https://docs.docker.com/compose/).

clone the project


`cd path/to/project && docker-compose up
`


then visit http://localhost:8891 for application


and visit http://localhost:8893 for phpMyAdmin

## Finishing

after finish working run command `docker-compose down` 

## How to Setup out of docker



clone the project
change `.env.example` `DB_HOST` to be equal `localhost`
set up your database and add credentials to `.env.example` file

`cd path/to/project && composer install
                             && npm install
                             && npm run dev
                             && test -e ./.env && echo env file exists || cp .env.example .env
                             && php artisan migrate
                             && php artisan serve
`


then visit http://localhost:8000 for application





