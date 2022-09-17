Пет проект написаный на laravel.

======================

Обычная CRUD система. 
------------

Приложение умеет:    

● Регистрация/аунтефикация/авторизация пользователя с выбором исполнитель/заказчик.

● Гость может зарегистрироваться или ввести логин и пароль или войти через сервис VK

● Заказчик  может создать задание, при создании пользователь должен выбрать нужную категорию и пройти валидацию полей, через API яндекс карт реализован способ выбора локации для исполнителя.

● Все задания выведены на главной странице для авторизированных пользователей

● На странице просмотра задания, если пользователь исполнитель можно оставить готовность к выполнению и ввести сумму средств за которую заказчик готов выполнить задание.

● Исполнитель может выбрать пользователя который будет выполнять задания из списка откликнувшихся в предыдущем пункте.

● Задание может переходить в разные статусы: Новое/В работе/ Отменено/Провалено/Выполнено в зависимости от того, какой пользователь(заказчик/исполнитель) на странице с заданием выбирает переход на следующий статус.

● Реализована система RBAC, позволяющая более гибко наделять правами того, или иного пользователя.

● На странице профиля есть функционал смены аватара/пароля/даты рождения и тд.

------------
Использование

● обычный web интерфейс

Входная точка в приложение находится в главной директории web/index.php

------------

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

