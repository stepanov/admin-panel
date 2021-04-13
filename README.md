# Admin Panel

## Build app

* composer install

* cp .env.example .env

* mkdir storage/app/public/images

* ./artisan storage:link

* ./artisan key:generate

* mysqladmin create -uroot admin_panel

* ./artisan migrate

* ./artisan db:seed

* npm install
.
* ./artisan serve

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

