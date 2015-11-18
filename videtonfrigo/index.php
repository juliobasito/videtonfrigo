<?php

require 'vendor/autoload.php';
require 'model/user.class.php';

$app = new \Slim\Slim(array(
    'view' => '\Slim\LayoutView', // I activate slim layout component
    'layout' => 'layouts/main.php' // I define my main layout
    ));
/*--------------------------------------------------
                    GET ROUTE
--------------------------------------------------*/
$app->get('/getUser/:userId', function ($userId) {
	//renvoi les infos de l'utilisateur
	$user = User::getUser($userId);
	var_dump($user);
});
$app->get('/getAllUser', function() {
	//renvoi toutes les infos de tous les utilisateurs
	$user = User::getAllUser();
	var_dump($user);
});
$app->get('/getIngredientsFrigo/:userId', function ($userId) {
	//renvoi tous les ingrédients du frigo de l'utilisateur
	
});
$app->get('/getIngredientsFrigo/:userId/:filtre', function ($userId, $filtre) {
	//renvoi tous les ingrédients du frigo de l'utilisateur avec filtre
});
$app->get('/getUserFrigo/:frigoId', function ($frigoId) {
	//renvoi l'utilisateur du frigo
});
$app->get('/getFrigo/:userId', function ($userId) {
	//renvoi le frigo de l'utilisateur
});
$app->get('/getAllFrigo', function () {
	//renvoi tous les frigos
});
$app->get('/getIngredientByID/:ingredientID', function ($ingredientID) {
	//renvoi les infos de l'ingrédient
});
$app->get('/getIngredientByNom/:nom', function ($nom) {
	//renvoi les infos de l'ingredient
});
$app->get('/getIngredientByPrix/:prix', function ($prix) {
	//renvoi les infos de l'ingredient dont le prix est < ou =
});
$app->get('/getIngredientByCategorie/:categorie', function ($categorie) {
	//renvoi tous les ingredients de la catégorie
});
$app->get('/getAllIngredient', function () {
	//renvoi tous les ingredients
});
$app->get('/getIngredientByRecette/:recetteId', function ($recetteId) {
	//renvoi les ingrédients de la recette
});
$app->get('/getCategorieName/:categorieId', function ($categorieId) {
	//renvoi le nom de la catégorie
});
$app->get('/getCategorieID/:categorieName', function ($categorieName) {
	//renvoi l'id de la catégorie
});
$app->get('/getAllCategorie', function () {
	//renvoi toutes les catégories
});
$app->get('/getRecetteByID/:recetteID', function ($recetteID) {
	//renvoi les infos de la recette
});
$app->get('/getRecetteByName/:nomRecette', function ($nomRecette) {
	//renvoi les infos de la recette
});
$app->get('/getRecetteByComplexite/:complexite', function ($complexite) {
	//renvoi les recettes avec une complexité < ou =
});
$app->get('/getRecetteByNote/:note', function ($note) {
	//renvoi les recettes avec une note > ou =
});
$app->get('/getRecetteByTemps/temps', function ($temps) {
	//renvoi les recettes avec un temps < ou =
});
$app->get('/getRecette/:complexite/:note/:temps', function ($complexite, $note, $temps) {

});
$app->get('/getAllRecette', function () {
	//renvoi toutes les recettes
});

$app->get('/connexion/:pseudo/:password', function ($pseudo, $password) {
	User::connexion($pseudo, $password);
	//retourne userID si ok sinon retourne 0
});
$app->run();

?>