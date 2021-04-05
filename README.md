<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Laravel Ecommerce Platform

This is a e-commerce platform I made mostly using Laravel ^8.3

| [Features][] | [Requirements][] | [Install][] | [How to setting][] | [License][] |


## Features 
- Automatic cross sell / up sell / related product offerings
- Open Source
- Ecommerce Solution

## Requirements

	PHP = ^7.3|^8.0
    laravel-ui = ^3.2

## Install

Clone repo

```
git clone https://github.com/Md-shefat-masum/Laravel-Ecommerce.git
```

Install Composer


[Download Composer](https://getcomposer.org/download/)


composer update/install 

```
composer install
```

Install Nodejs


[Download Node.js](https://nodejs.org/en/download/)


NPM dependencies
```
npm install
```

Using Laravel Mix 

```
npm run dev
```

## How to setting 

Go into .env file and change Database and Email credentials.

```
php artisan migrate
```

```
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=UserRoleSeeder
php artisan db:seed --class=DatabaseSeeder
```
	
Generating a New Application Key
```
php artisan key:generate
```


## License

> Copyright (C) 2021 HungryCoders.  
**[⬆ back to top](#laravel-ecommerce-platform)**

[Features]:#features
[Requirements]:#requirements
[Install]:#install
[How to setting]:#how-to-setting
[License]:#license
