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
$route['default_controller'] = 'home';

$route['ctbe'] = 'home/ctbe';

// beasiswa-ctbe-1
$route['beasiswa-ctbe'] = 'home/beasiswa_ctbe';
$route['pendaftaran-beasiswa-ctbe'] = 'home/pendaftaran_beasiswa_ctbe';

// beasiswa-ctbe-2
$route['beasiswa-ctbe-2'] = 'home/beasiswa_ctbe_2';
$route['pendaftaran-beasiswa-ctbe-2'] = 'home/pendaftaran_beasiswa_ctbe_2';

$route['arungisamudra'] = 'arungisamudra';
$route['arungisamudra/bootcamp/daftar'] = 'arungisamudra/daftar_bootcamp';
$route['arungisamudra/edutrip/daftar'] = 'arungisamudra/daftar_edutrip';

$route['404_override'] = 'mercusuar';

$route['translate_uri_dashes'] = FALSE;
