# Yii2 Tinker
[![Build Status](https://travis-ci.org/luoxiaojun1992/yii2-tinker.svg?branch=master)](https://travis-ci.org/luoxiaojun1992/yii2-tinker)

## Features
A console debugger like laravel artisan tinker

+ REPL
+ Powerful Dumper

## Installation
```
composer require "luoxiaojun1992/yii2-tinker:*"
```
## Configuration
Don't need any configuration.

If the command doesn't work, add the following configuration manually.

config/console.php
```
...
$config = [
    ...
    'controllerMap' => [
        ...
        'tinker' => [ // Tinker command line.
            'class' => \Yii2Tinker\TinkerController::class,
        ],
        ...
    ],
    ...
];
...
```
## Usage
execute ```./yii tinker``` in your application's root folder

Example:

```
Psy Shell v0.8.1 (PHP 7.0.14 — cli) by Justin Hileman
>>> Yii::$app->params['adminEmail']
=> "admin@example.com"
>>> dd([1=>'a', 2=>'b', 3=>'c'])
array:3 [
  1 => "a"
  2 => "b"
  3 => "c"
]
>>> 
```
