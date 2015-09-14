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
// [url] = [controller/model/item]
#$route['default_controller'] = "welcome";
$route['404_override'] = '';
$route['default_controller'] = 'awesome';
// $route['files/create'] = 'files/create';
// $route['files/view/:num'] = 'files/view/$id';
// $route['files/lists'] = 'files/lists';
// $route['files/view'] = 'files/view/1';
// //$route['files/(:any)'] = 'files/view/$1';
// $route['files'] = 'files';
// $route['jobs/lists'] = 'jobs/lists';
// $route['jobs/lists_json'] = 'jobs/lists_json';
// $route['jobs/lists_by_state/(:any)'] = 'jobs/lists_by_state/$1';
// $route['jobs/lists_by_category/(:any)'] = 'jobs/lists_by_category/$1';
// $route['jobs/lists_by_category_edu/(:any)'] = 'jobs/lists_by_category_course/$1';
// $route['(:any)'] = 'pages/view/$1';
//$route['default_controller'] = 'files/create';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
