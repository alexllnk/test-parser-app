<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Тестовое задание ( https://xpz.im/wewaityou )

Задание выполнено на базе фреймворка Laravel 8.x.
Пункты задания:
1. путь страницы представления "/example" 
2. SQL-запрос:  SELECT title FROM company
                WHERE sms_location_id IN (SELECT id FROM sms_location
                WHERE title IN ('USA', 'Ukraine'));

3. путь страницы формы калькулятора: "/calc" ( класс App\Helpers\CampaignCalc )
4. путь страницы формы парсера: "/parser" ( класс App\Parsers\CommentParser ) 
