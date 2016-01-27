<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main";
$route['404_override'] = '';


$route['why-us'] = 'main/whyus';
$route['system'] = 'main/system';
$route['about-us'] = 'main/aboutus';
$route['contact-us'] = 'main/contact';
$route['projects/(:any)'] = 'main/projects/$1';
$route['services/exterior'] = 'main/services/exterior';
$route['services/roof-restoration'] = 'main/services/roof-restoration';
$route['services/interior'] = 'main/services/interior';


$route['products/elasto-bond'] = 'main/products/bond';
$route['products/sealant-caulk'] = 'main/products/sealant';
$route['products/primer'] = 'main/products/primer';
$route['products/topcoat'] = 'main/products/topcoat';
$route['products/polyurethane'] = 'main/products/polyurethane';
$route['products/epoxy-floor-coating'] = 'main/products/epoxy-floor-coating';
$route['products/polyurea'] = 'main/products/polyurea';
$route['products/pvc-membrane'] = 'main/products/pvc-membrane';


/* End of file routes.php */
/* Location: ./application/config/routes.php */