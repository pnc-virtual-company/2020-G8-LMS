<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
// Route for login
$routes->add('/', 'User::index',['filter' => 'noauth']);
// Route for logout 
$routes->add('logout', 'User::logoutUser');
//Route for posittion
$routes->add('position', 'Position::index',['filter' => 'auth']);
//Route for department
$routes->add('department', 'Department::index',['filter' => 'auth']);
//Route for leave submit
$routes->add('leave', 'Leave::showSummitedleaves',['filter' => 'auth']);
// Route for delete position
$routes->add('removePosition/(:num)', 'Position::deletePosition/$1');

// Route of Employee
$routes->add('employees', 'Employee::showUser',['filter' => 'auth']);
$routes->add('addUser', 'Employee::createUser');
$routes->add('remove/(:num)', 'Employee::deleteEmployee/$1');
$routes->add('update', 'Employee::updateEmployee');
//Route for your leaves
$routes->add('your_leave', 'Your_leave::yourLeaveList',['filter' => 'auth']);
$routes->add('addYourLeave', 'Your_leave::createYourLeave');
$routes->add('deleteLeaveRequest/(:num)', 'Your_leave::deleteLeaveRequest/$1');
//Route for send email                                                  
$routes->add('email', 'Email::showEmail');
$routes->add('email/verify', 'Email::showEmailVeryfy');
$routes->add('sendback', 'Email::showEmailback');


// $routes->add('department', 'Departments::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
