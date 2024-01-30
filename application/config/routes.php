<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['user/logout'] = 'Auth/logout';

//Level Dashbord
$route['dashboard'] = 'dashboard/index';

//Super-Admin Menu
$route['verifikasi/(:any)/(:any)/(:any)'] = 'Verifikasi/hasil_verifikasi/$1/$2/$3';
$route['Catatan/(:any)/(:any)'] = 'Verifikasi/tolak_catatan/$1/$2';

//authFeature
$route['Tambah_User'] = 'Auth/tambah_data';
$route['Edit_User/(:any)'] = 'Auth/edit_data/$1';
$route['activation'] = 'Auth/reset_password/$1';
$route['Delete_User/(:any)'] = 'Auth/delete_data/$1';