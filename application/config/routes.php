<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['user/add']='user/add';
$route['order/add']='order/add';

$route['user']='user/index';
$route['order']='order/index';