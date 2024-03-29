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
$route['404_override'] = '';
$route['backoffice/contactUs'] = 'backoffice/contactUs';
$route['backoffice/viewContactMessage/(:num)'] = 'backoffice/viewContactMessage/$1';
$route['backoffice/testimonials'] = 'backoffice/testimonials';
$route['backoffice/newsletterSubscribers'] = 'backoffice/newsletterSubscribers';
$route['backoffice/menuCategories'] = 'backoffice/menuCategories';
$route['backoffice/menuItems'] = 'backoffice/menuItems';
$route['backoffice/editMenuCategory/(:num)'] = 'backoffice/editMenuCategory/$1';
$route['backoffice/editMenuItem/(:num)'] = 'backoffice/editMenuItem/$1';
$route['backoffice/editTestimonial/(:num)'] = 'backoffice/editTestimonial/$1';
$route['backoffice/editTeamMember/(:num)'] = 'backoffice/editTeamMember/$1';
$route['backoffice/manageTeam'] = 'backoffice/manageTeam';
$route['backoffice/manageImages'] = 'backoffice/manageImages';
$route['backoffice/hfContent'] = 'backoffice/hfContent';
$route['backoffice/aboutContent'] = 'backoffice/aboutContent';
$route['backoffice/changePassword'] = 'backoffice/changePassword';
$route['about'] = 'home/about';
$route['team'] = 'home/team';
$route['contact'] = 'home/contact';
$route['menu'] = 'home/menu';
$route['translate_uri_dashes'] = FALSE;
