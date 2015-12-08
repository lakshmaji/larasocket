## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
Larasocket
===================
### INDEX


[TOC]

Chat application using **Laravel**, **Redis**, **socket.io** and **node js**

----------


 <i class="icon-cog"></i> Prerequisites
-------------


> **You need to have following installed:**

> - ***Laravel***
> - ***Redis***
> you can check installation of ***Redis*** using `redis-cli monitor` or `redis-cli ping` command from your terminal The outputs of both commands would be **"OK"** and **"PONG"**
> - ***nodejs***
> you can check whether you have installed node on your machine by using **`node -v`** which outputs **"v10.0"** or something
> - **socket.io**

-------------

<i class="icon-file"></i>Installation
-------------

You can clone repository using following git command
><i class="icon-pencil"></i>git clone https://github.com/lakshmajim/larasocket.git

or you can directly download the zip and move to your local repository from [Github](https://github.com/lakshmajim/larasocket) 

#### <i class="icon-hdd"></i> do composer install
><i class="icon-pencil"></i>composer install 

#### <i class="icon-hdd"></i> migrate all tables
><i class="icon-pencil"></i>php artisan migrate 

#### <i class="icon-hdd"></i> setup **.env**  file
><i class="icon-pencil"></i>
>DB_HOST=HOST_NAME
DB_DATABASE=DATABASE_NAME
DB_USERNAME=DB_USERNAME
DB_PASSWORD=DB_PASSWORD



#### <i class="icon-hdd"></i> Start Redis
><i class="icon-pencil"></i>redis-server 

#### <i class="icon-hdd"></i> Start server.js
><i class="icon-pencil"></i>
>$ cd nodejs
>
$nodejs server.js 


----------
That's it

<i class="icon-upload">Getting it to work!
-------------------



#### <i class="icon-refresh"></i> Open browser
point url to 
><i class="icon-pencil">localhost/larasocket/public/home/

Here You will be redirected to Login page .Just click on register and login .Similarly open another browser and register with different user and login.Hooray!.Got it?? 







----------


Screen shots
-------------











