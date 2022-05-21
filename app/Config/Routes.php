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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//ROUTER CONCERNANT L'UTILISATEUR DANS LE SYSTEM EXPERT DE L'EMIT
$routes->match(["get", "post"],'/login', 'ControllerUser::ajoutUser');
$routes->match(["get", "post"],'/inscrire', 'ControllerUser::inscrire');

//ROUTEUR CONCERNANT L'ETUDIANT 

$routes->get('/', 'Home::index');
$routes->get('/accueil', 'Acceil::indexFrom');
$routes->get('/login', 'Acceil::login');
$routes->get('/etudiant', 'Acceil::ecole');
$routes->get('/header', 'Acceil::header');
$routes->match(["get", "post"],'/aes', 'Acceil::aesFunction');
$routes->get('/rpm', 'Acceil::rpm');
$routes->get('/da2i', 'Acceil::da2i');
$routes->match(["get" , "post"],'/route', 'Acceil::route');
$routes->post('/aes/edit/(:any)', 'Acceil::editEtudiantAes/$1');
$routes->get('/site/delete/(:num)', 'Acceil::delete/$1');
$routes->get('/liste', 'Acceil::licence1');
$routes->get('/liste2', 'Acceil::licence2');
$routes->get('/liste3', 'Acceil::licence3');
$routes->get('/liste5', 'Acceil::M2');
$routes->get('/liste4', 'Acceil::M1');
$routes->get('/edit/(:any)', 'Acceil::editEtudiant/$1');


//ROUTEUR CONCERNANT LE MATIERE 
$routes->get('/matiere', 'Acceil::matiere');
$routes->match(["get", "post"],'/aesMatiere', 'ControllerMatiere::affichageMatiere');
$routes->get('/site/deleteMatiere/(:num)', 'ControllerMatiere::deleteMatiere/$1');
$routes->get('/site/edit/(:num)', 'ControllerMatiere::editMatiere/$1');
$routes->post('/aes/editMat/(:num)', 'ControllerMatiere::editMat/$1');
$routes->get('/listem', 'ControllerMatiere::licence1');
$routes->get('/liste2m', 'ControllerMatiere::licence2');
$routes->get('/liste3m', 'ControllerMatiere::licence3');
$routes->get('/liste5m', 'ControllerMatiere::M2');
$routes->get('/liste4m', 'ControllerMatiere::M1');



//ROUTER CONCERNANT L'EXAMEN DES ETUDIANTS
$routes->get('/examen', 'ControllerExamen::examen');
$routes->match(["get", "post"],'/aesExamen', 'ControllerExamen::aesExamen');
$routes->get('/site/deleteExamen/(:num)', 'ControllerExamen::deleteExamen/$1');
$routes->get('/site/editEx/(:num)', 'ControllerExamen::editExamen/$1');
$routes->post('/aes/editEx/(:num)', 'ControllerExamen::editEx/$1');
$routes->get('/listeE', 'ControllerExamen::licence1');
$routes->get('/listeE2', 'ControllerExamen::licence2');
$routes->get('/listeE3', 'ControllerExamen::licence3');
$routes->get('/listeE5', 'ControllerExamen::M2');
$routes->get('/listeE4', 'ControllerExamen::M1');



//ROUTER CONCERNANT LES NOTES DES ETUDIANTS 
$routes->get('/note', 'ControllerNote::afficheNote');
$routes->get('/aesNote', 'ControllerNote::aesNote');
$routes->get('/impression/(:num)', 'ControllerNote::impression/$1');
$routes->get('/rechercherNote', 'ControllerNote::rechercherNote');
$routes->match(["get", "post"],'/ajoutNote', 'ControllerNote::ajoutNote');
$routes->get('/site/deleteNote/(:num)', 'ControllerNote::deleteNote/$1');

//RECHERCHE DES ETUDIANT
$routes->match(["get", "post"],'/rechercher', 'Acceil::rechercher');

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
