<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Admin routes
$routes->group("admin", ["filter" => "authAdmin"], function ($routes) {
    $routes->get("/", "AdminController::index");

    // Manage User
    $routes->get("listUsers", "AdminController::listUsers");
    $routes->get("createUser", "AdminController::createUser");
    $routes->post("submit-form-storeUser", "AdminController::storeUser");
    $routes->get("editUser/(:num)", "AdminController::singleUser/$1");
    $routes->post("updateUser", "AdminController::updateUser");
    $routes->get("deleteUser/(:num)", "AdminController::deleteUser/$1");
    // Manage Profile
    $routes->get("profile", "AdminController::profile");
    $routes->post("updateProfile", "AdminController::updateProfile");

    //Change password
    $routes->get("changePassword", "AdminController::changePassword");
    $routes->post("updatePassword", "AdminController::updatePassword");
});

// Obec routes
$routes->group("obec", ["filter" => "authObec"], function ($routes) {
    $routes->get("/", "ObecController::index");
});

// Area routes
$routes->group("area", ["filter" => "authArea"], function ($routes) {
    $routes->get("/", "AreaController::index");
});

// Teacher routes
$routes->group("teacher", ["filter" => "authTeacher"], function ($routes) {
    $routes->get("/", "TeacherController::index");
    $routes->post("updateProfile", "TeacherController::updateProfile");
    $routes->get("manageMyCourses", "TeacherController::manageMyCourses");


});

// Student routes
$routes->group("student", ["filter" => "authStudent"], function ($routes) {
    $routes->get("/", "StudentController::index");
});

// Population routes
$routes->group("population", ["filter" => "authPopulation"], function ($routes) {
    $routes->get("/", "PopulationController::index");
});

// Allready Logged in
$routes->group("", ["filter" => "alreadyLoggedin"], function ($routes) {
    $routes->get('/login', 'Login::index');
    $routes->get('/register', 'Register::index');
});

$routes->get('/', 'Pages::index');
$routes->get('/users', 'Users::index');

$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');

$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');

$routes->get('/logout', 'Login::logout');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('(:any)', 'Pages::view/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
