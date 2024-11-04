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
$route['default_controller'] = "index";
$route['welcome'] = "welcome";
$route['oops'] = "oops";
// $route['snapshot'] = "snapshot";
// $route['cronaction'] = "cronaction";
// $route['croneventreg'] = "croneventreg";

/* im */
$route['im_(.*)'] = "index/imshortname/$1";
$route['content/(.*)/(.*)/(.*)'] = "content/$1/index/$2/$3";
$route['content/(.*)/(.*)'] = "content/$1/index/$2";
$route['content/(.*)'] = "content/$1/index/";
$route['webtools/(.*)/(.*)/(.*)'] = "webtools/$1/index/$2/$3";
$route['webtools/(.*)/(.*)'] = "webtools/$1/index/$2";
$route['getcaptcha/(.*)'] = "getcaptcha/$1";
/* sysmgr */
$route['sysmgr/(:any)/(:any)'] = "sysmgr/$1/$2";
$route['sysmgr/(:any)'] = "sysmgr/sysmgr/$1";
$route['sysmgr'] = "sysmgr/sysmgr/index";
/* Mobile */
$route['mobile/im_(.*)'] = "mobile/index/imshortname/$1";
$route['mobile/webtools/(.*)/(.*)/(.*)'] = "webtools/$1/index/$2/$3";
$route['mobile/webtools/(.*)/(.*)'] = "webtools/$1/index/$2";
$route['mobile/(.*)/(.*)/(.*)'] = "mobile/$1/index/$2/$3";
$route['mobile/(.*)/(.*)'] = "mobile/$1/index/$2";
$route['mobile/(.*)'] = "mobile/$1/index/";
$route['mobile'] = "mobile/index/index";
/* Mobile SubSite */
$route['(.*)/mobile/webtools/(.*)/(.*)/(.*)'] = "webtools/$2/Site/$1/$3/$4";
$route['(.*)/mobile/webtools/(.*)/(.*)'] = "webtools/$2/Site/$1/$3";
$route['(.*)/mobile/(.*)/(.*)/(.*)'] = "mobile/$2/Site/$1/$3/$4";
$route['(.*)/mobile/(.*)/(.*)'] = "mobile/$2/Site/$1/$3";
$route['(.*)/mobile/(.*)'] = "mobile/$2/Site/$1";
$route['(.*)/mobile/getcaptcha/(.*)'] = "getcaptcha/$2/Site/$1/";
$route['(.*)/mobile/im_(.*)'] = "mobile/index/imshortname/$2/$1";
$route['(.*)/mobile'] = "mobile/index/Site/$1";
/* SubSite */
$route['(.*)/content/(.*)/(.*)/(.*)'] = "content/$2/Site/$1/$3/$4";
$route['(.*)/content/(.*)/(.*)'] = "content/$2/Site/$1/$3";
$route['(.*)/content/(.*)'] = "content/$2/Site/$1";
$route['(.*)/webtools/(.*)/(.*)/(.*)'] = "webtools/$2/Site/$1/$3/$4";
$route['(.*)/webtools/(.*)/(.*)'] = "webtools/$2/Site/$1/$3";
$route['(.*)/getcaptcha/(.*)'] = "getcaptcha/$2/Site/$1/";
$route['(.*)/im_(.*)'] = "index/imshortname/$2/$1";
$route['(.*)'] = "index/Site/$1";




$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */