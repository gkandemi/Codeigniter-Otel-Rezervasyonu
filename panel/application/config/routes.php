<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "dashboard";
$route['404_override'] = '';

$route["dashboard"]         = "dashboard/index";
$route["dashboard/(.*)"]    = "dashboard/$1";

$route["roomcategory"]      = "roomcategory/index";
$route["roomcategory/(.*)"] = "roomcategory/$1";

$route["roomproperties"]      = "roomproperties/index";
$route["roomproperties/(.*)"] = "roomproperties/$1";

$route["roomextraservices"]      = "roomextraservices/index";
$route["roomextraservices/(.*)"] = "roomextraservices/$1";

$route["room"]      = "room/index";
$route["room/(.*)"] = "room/$1";

$route["^(.*)"] = "index/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */