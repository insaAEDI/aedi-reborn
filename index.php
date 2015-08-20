<?php
require 'flight/Flight.php';

Flight::view()->set('stylesheet', '/assets/css/style.css');

Flight::render('menu', array(), 'menu_content');

Flight::route('/', function() {
	Flight::render('accueil', array(), 'body_content');
	Flight::render('layout', array('title' => 'Accueil'));
});

Flight::route('/apropos', function() {
	Flight::render('apropos', array(), 'body_content');
	Flight::render('layout', array('title' => 'A propos'));
});

Flight::route('/contact', function() {
	Flight::render('contact', array(), 'body_content');
	Flight::render('layout', array('title' => 'Contact'));
});

Flight::route('/etudiants/evenements', function() {
	Flight::render('etudiants/evenements', array(), 'body_content');
	Flight::render('layout', array('title' => 'Evénements'));
});

Flight::route('/entreprises/RIFs', function() {
	Flight::render('entreprises/rifs', array(), 'body_content');
	Flight::render('layout', array('title' => 'Rencontres IF'));
});

Flight::route('/entreprises/entretiens', function() {
	Flight::render('entreprises/entretiens', array(), 'body_content');
	Flight::render('layout', array('title' => 'Entretiens'));
});

Flight::route('/entreprises/conferences', function() {
	Flight::render('entreprises/conferences', array(), 'body_content');
	Flight::render('layout', array('title' => 'Conférences'));
});

Flight::route('/entreprises/cvtheque', function() {
	Flight::render('entreprises/cvtheque', array(), 'body_content');
	Flight::render('layout', array('title' => 'CVthèque'));
});

Flight::start();
?>
