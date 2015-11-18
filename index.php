<?php

require 'vendor/autoload.php';
require 'model/user.class.php';
require 'model/ingredient.class.php';
require 'model/categorie.class.php';
require 'model/recette.class.php';
require 'model/frigo.class.php';

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
	Frigo::getIngredientsFrigo($userId);
	//renvoi tous les ingrédients du frigo de l'utilisateur
});
$app->get('/getIngredientsFrigoWithFiltre/:userId/:filtre/:donnee', function ($userId, $filtre,$donnee) {
	Frigo::getIngredientsFrigoWithFiltre($userId,$filtre,$donnee);
	//renvoi tous les ingrédients du frigo de l'utilisateur avec filtre
});
$app->get('/getUserFrigo/:frigoId', function ($frigoId) {
	Frigo::getUserFrigo($frigoId);
	//renvoi l'utilisateur du frigo
});
$app->get('/getFrigo/:userId', function ($userId) {
	Frigo::getFrigo($userId);
	//renvoi le frigo de l'utilisateur
});
$app->get('/getAllFrigo', function () {
	Frigo::getAllFrigo();
	//renvoi tous les frigos
});
$app->get('/getIngredientByID/:ingredientID', function ($ingredientID) {
	//renvoi les infos de l'ingrédient
	$ingredient = Ingredient::getIngredientById($ingredientID);
	var_dump($ingredient);
});
$app->get('/getIngredientByNom/:nom', function ($nom) {
	//renvoi les infos de l'ingredient
	$ingredient = Ingredient::getIngredientByName($nom);
	var_dump($ingredient);
});
$app->get('/getIngredientByPrix/:prix', function ($prix) {
	//renvoi les infos de l'ingredient dont le prix est < ou =
	$ingredient = Ingredient::getIngredientByPrix($prix);
	var_dump($ingredient);
});
$app->get('/getIngredientByCategorie/:categorie', function ($categorie) {
	//renvoi tous les ingredients de la catégorie
	$ingredient = Ingredient::getIngredientByCategorie($categorie);
	var_dump($ingredient);
});
$app->get('/getAllIngredient', function () {
	//renvoi tous les ingredients
	$ingredient = Ingredient::getAllIngredient();
	var_dump($ingredient);
});
$app->get('/getIngredientByRecette/:recetteId', function ($recetteId) {
	//renvoi les ingrédients de la recette
	$ingredient = Ingredient::getIngredientByRecette($recetteId);
	var_dump($ingredient);
});
$app->get('/getCategorieName/:categorieName', function ($categorieName) {
	//renvoi le nom de la catégorie
	$categorie = Categorie::getCategorieName($categorieName);
	var_dump($categorie);
});
$app->get('/getCategorieID/:categorieId', function ($categorieId) {
	//renvoi l'id de la catégorie
	$categorie = Categorie::getCategorieId($categorieId);
	var_dump($categorie);
});
$app->get('/getAllCategorie', function () {
	//renvoi toutes les catégories
	$categorie = Categorie::getAllCategorie();
	var_dump($categorie);
});
$app->get('/getRecetteByID/:recetteID', function ($recetteID) {
	//renvoi les infos de la recette
	$recette = Recette::getRecetteByID($recetteID);
	var_dump($recette);
});
$app->get('/getRecetteByName/:nomRecette', function ($nomRecette) {
	//renvoi les infos de la recette
	$recette = Recette::getRecetteByName($nomRecette);
	var_dump($recette);
});
$app->get('/getRecetteByComplexite/:complexite', function ($complexite) {
	//renvoi les recettes avec une complexité < ou =
	$recette = Recette::getRecetteByComplexite($complexite);
	var_dump($recette);
});
$app->get('/getRecetteByNote/:note', function ($note) {
	//renvoi les recettes avec une note > ou =
	$recette = Recette::getRecetteByNote($note);
	var_dump($recette);	
});
$app->get('/getRecetteByTemps/:temps', function ($temps) {
	//renvoi les recettes avec un temps < ou =
	$recette = Recette::getRecetteByTemps($temps);
	var_dump($recette);	
});
$app->get('/getRecette/:complexite/:note/:temps', function ($complexite, $note, $temps) {
	$recette = Recette::getRecetteByAll($complexite, $note, $temps);
	var_dump($recette);	
});
$app->get('/getAllRecette', function () {
	//renvoi toutes les recettes
	$recette = Recette::getAllRecette();
	var_dump($recette);
});

$app->get('/connexion/:pseudo/:password', function ($pseudo, $password) {
	User::connexion($pseudo, $password);
	//retourne userID si ok sinon retourne 0
});
$app->run();

?>