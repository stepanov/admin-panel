# Admin Panel

## Build app

* composer install

* ./artisan migrate

* ./artisan db:seed

* ./artisan serve

* npm install

* npm run watch

* open http://127.0.0.1:8000

## Run Task To Generate A Questionnaire

### Manually one time

```
php artisan questionnaire:generate
```

### Manuall via scheduler

```
php artisan schedule:run
```

### Via cron

```
* * * * * cd /path-to-the-app && php artisan schedule:run >> /dev/null 2>&1
```

## TODO

* add Google Authentificator

* add broadcast events via Pusher

* add docker-compose

* add script to automate build and deploy

* add more integration tests

