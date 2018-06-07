SKY Online Judge (Developing)
>An open source online judge web system 

Required
-------------
1. PHP 7.2.0 +<br>
   Required modules:
   1. pdo
   2. pdo-mysql
   3. gmp
2. MySQL or MariaDB

Install
-------------
1. Clone SKY Online Judge Repository to yout website (Don't forget to fetch submodules)
2. Copy `config/config.example.php` to `config/config.php`
3. Fill out your MySQL setting in config.php
4. Set up your database using `install/FullSQLFormat.sql`.
5. Copy `LocalSetting.example.php` to `LocalSetting.php` then set its starting directory at `$_E['SITEDIR']`
7. Install [composer](https://getcomposer.org/) or put composer.phar to site root
8. use `php composer.phar install` or `composer install` to install php library
6. start your SKY Online Judge ~
=======
# SkyOnlinejudgeWeb

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 6.0.0.

記得要自行安裝

## 取得附加元件
<!-- https://codingthesmartway.com/building-an-angular-5-project-with-bootstrap-4-and-firebase/ -->
run
```sh
npm install
```
就可以取得專案的附加元件，如果不執行的話就無法build(`ng serve --open` or `ng build`)

## Build with `.htaccess`

Run `./build.sh` to build the project with `.htaccess`. the build artifacts will be stored in the `dist/` directory.

You need to input the path of RewriteBase in your `.htaccess`

for example, if you want to run your project at `http://localhost/jinkela`, then the RewriteBase is `/jinkela/`.

## 支援 IE

https://angular.io/guide/browser-support

將 ```src/polyfills.ts``` 裡面關於 IE 的部分註解拿掉就可以了，預設是沒有拿掉的

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `--prod` flag for a production build.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via [Protractor](http://www.protractortest.org/).

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md).
