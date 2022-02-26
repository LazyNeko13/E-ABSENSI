<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = 'auth/controller_ctl';

$route['auth']  = 'auth/controller_ctl';

$route['auth/(:any)'] = 'auth/controller_ctl/$1';

$route['auth/(:any)/(:any)'] = 'auth/controller_ctl/$1/$2';



$route['dashboard']  = 'dashboard/controller_ctl';

$route['dashboard/(:any)'] = 'dashboard/controller_ctl/$1';

$route['dashboard/(:any)/(:any)'] = 'dashboard/controller_ctl/$1/$2';


$route['user']  = 'user/controller_ctl';

$route['user/(:any)'] = 'user/controller_ctl/$1';

$route['user/(:any)/(:any)'] = 'user/controller_ctl/$1/$2';


$route['akademik']  = 'akademik/controller_ctl';

$route['akademik/(:any)'] = 'akademik/controller_ctl/$1';

$route['akademik/(:any)/(:any)'] = 'akademik/controller_ctl/$1/$2';


$route['presensi']  = 'presensi/controller_ctl';

$route['presensi/(:any)'] = 'presensi/controller_ctl/$1';

$route['presensi/(:any)/(:any)'] = 'presensi/controller_ctl/$1/$2';


$route['setting']  = 'setting/controller_ctl';

$route['setting/(:any)'] = 'setting/controller_ctl/$1';

$route['setting/(:any)/(:any)'] = 'setting/controller_ctl/$1/$2';


$route['laporan']  = 'laporan/controller_ctl';

$route['laporan/(:any)'] = 'laporan/controller_ctl/$1';

$route['laporan/(:any)/(:any)'] = 'laporan/controller_ctl/$1/$2';



$route['hukuman']  = 'hukuman/controller_ctl';

$route['hukuman/(:any)'] = 'hukuman/controller_ctl/$1';

$route['hukuman/(:any)/(:any)'] = 'hukuman/controller_ctl/$1/$2';



$route['profile']  = 'profile/controller_ctl';

$route['profile/(:any)'] = 'profile/controller_ctl/$1';

$route['profile/(:any)/(:any)'] = 'profile/controller_ctl/$1/$2';



// $route 



$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

