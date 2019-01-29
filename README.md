# Figured Blog App

My project used as step to be contracted by Figured.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

## Overview

[I hosted the project on Heroku](https://figured-blog.herokuapp.com), but I'm having trouble installing the mongodb driver... [for the database I used the mLab because it is also free](https://www.mlab.com/home).

all the crud inside the /dashboard route uses only the blade engine, and the blog on / is using Vuejs

### Installing

```
git clone https://github.com/charles-benedito/figured-blog-application
cd figured-blog-application
composer install
php artisan serve
```
Make sure you have the [MongoDB PHP driver](http://php.net/manual/en/mongodb.installation.php) installed


And you can access the blog through
[http://localhost:8000/](http://localhost:8000/)

And the dashboard through
[http://localhost:8000/login](http://localhost:8000/login)

Default admin user
E-Mail: figured@figured.figured
Password: figured

## Disclaimer
It was fun to go back to working with laravel, and I discovered I still like php a lot, unfortunately I was a bit rusty and I had very little time to work on the project, but with more time I would certainly add the list below:

1. More basic functionality like comments and image upload
2. JWT authentication for a better api security
3. Docker to create a final bundle already with the mongo connection driver and apache
4. Tests, I'm ashamed to send this without tests, but unfortunately I did not have the time
5. Access levels, so that the administrator can manage the posts and we can create a user just for comments
6. Pusher to make this in real time

and if the application was one day to production I would implement things like
1. jenkins to automate the server
2. grafana for some monitoring with alerts
3. some proxy like nginx
4. and if the application ever needs kibana and elastcsearch for posts search
5. and rabbitmq for queuing  
6. ci/cd
