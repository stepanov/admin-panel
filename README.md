# Admin Panel

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


