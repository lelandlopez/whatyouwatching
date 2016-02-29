# What You Watching

In Progress Project of web application that shows what shows an establishment is showing.  Users are able to look up establishments and are able to see what shows they are watching on certain days.  Establishments are able advertise what shows they are watching.

## Info

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisities

Download to Server.

Change .env to match server credentials.

Change config/database to match server credentials.

Create Mysql database to store tables.

Migrate tables
```
php artisan migrate:refresh --seed
```

## Built With

* Lavarel 5.2
* Bootstrap 3.3.6

## Authors

Leland Lopez
