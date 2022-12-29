<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['cosas'] = 'user/Cosas';
$route['tags'] = 'user/Tag';
$route['agregar'] = 'user/Add';
$route['agregartag'] = 'user/Addt';
$route['login'] = 'user/Login';
$route['register'] = 'user/Register';
$route['register/save'] = 'user/Register/save3';
$route['agregar/save'] = 'user/Add/save';
$route['agregartag/save'] = 'user/Addt/save';
$route['cosas/(:num)'] = 'user/Edit/index/$1';
$route['cosas/update/(:num)'] = 'user/Edit/update/$1';
$route['tags/update/(:num)'] = 'user/Editag/update/$1';
$route['tags/(:num)'] = 'user/Editag/index/$1';
$route['cosas/delete/(:num)'] = 'user/Cosas/delete/$1';
$route['tag/delete/(:num)'] = 'user/Tag/deletag/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
