<?php

$route['contact'] = 'contact';
$route['contact/create'] = 'contact/create';
 
$route['contact/edit/(:any)'] = 'contact/edit/$1';
 
$route['contact/view/(:any)'] = 'contact/view/$1';
$route['contact/(:any)'] = 'contact/view/$1';

?>
