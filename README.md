Background

PHP application using design pattern mvc,solid principles,composer for dependencies
and docker-compose without any framework for setting up the environment it provides a clean code with PSR0 and PSR4 for autoload,also the
PSR1,PSR2,PSR3

1. Start the Docker containers;
`docker compose up -d`
1. Install composer;
   `ocker compose exec app composer install`
2. Run your tests; `docker compose exec app php vendor/bin/phpunit .` 
3. Stop the docker containers; `docker compose down`
