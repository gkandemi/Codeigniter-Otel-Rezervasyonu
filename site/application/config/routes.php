<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "welcome";
$route['404_override'] = '';

$route["room"]      = "room/index";
$route["room/(.*)"] = "room/$1";

$route["^(.*)"] = "index/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */