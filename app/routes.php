<?php
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('posts', 'PostController@index');
$router->post('posts', 'PostController@store');
