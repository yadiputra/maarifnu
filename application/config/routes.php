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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route = array(
    'default_controller' => 'welcome',
    'visi' => 'mod_main/visi',
    'ppdb' => 'mod_main/ppdb',
    'sejarah' => 'mod_main/sejarah',
    'sarana' => 'mod_main/sarana',
    'struktur' => 'mod_main/struktur',
    'artikel' => 'mod_main/artikel',
    'kontak' => 'mod_main/kontak',
    'estrakulikuler' => 'mod_main/estrakulikuler',
    'berita' => 'berita/news',
	
    'ASAS-X-PERTAMA' => 'admin/x1',
    'ASAS-X-KEDUA' => 'admin/x2',
	
    'ASAS-XIIPA-PERTAMA' => 'admin/ipa1',
	'ASAS-XIIPA-KEDUA' => 'admin/ipa2',
	
	'ASAS-XIIPS-PERTAMA' => 'admin/ips1',
    'ASAS-XIIPS-KEDUA' => 'admin/ips2',

);
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
