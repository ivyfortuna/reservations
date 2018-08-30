<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['user/add']='user/add';
$route['order/add']='order/add';
$route['destination/add']='destination/add';

$route['order/(:num)']='order/index/$1';

$route['user']='user/index';
$route['logout']='user/logout';
$route['order']='order/index';
$route['report']='report/index';
$route['report/pdf']='report/pdf';
