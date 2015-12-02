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
						USER
--------------------------------------------------*/
$app->get('/getUser/:userId', function ($userId) {
	//renvoi les infos de l'utilisateur
	$user = User::getUser($userId);
});
$app->get('/getAllUser', function() {
	//renvoi toutes les infos de tous les utilisateurs
	$user = User::getAllUser();
});

$app->get('/connexion/:pseudo/:password', function ($pseudo, $password) {
	User::connexion($pseudo, $password);
	//retourne userID si ok sinon retourne 0
});
/*--------------------------------------------------
						FRIGO
--------------------------------------------------*/
$app->get('/getIngredientsFridge/:userId', function ($userId) {
	Frigo::getIngredientsFridge($userId);
	//renvoi tous les ingrédients du frigo de l'utilisateur
});
$app->get('/getIngredientsFridgeWithFiltre/:userId/:filtre/:donnee', function ($userId, $filtre,$donnee) {
	Frigo::getIngredientsFridgeWithFiltre($userId,$filtre,$donnee);
	//renvoi tous les ingrédients du frigo de l'utilisateur avec filtre
});
$app->get('/getUserFridge/:frigoId', function ($frigoId) {
	Frigo::getUserFridge($frigoId);
	//renvoi l'utilisateur du frigo
});
$app->get('/getFridge:userId', function ($userId) {
	Frigo::getFridge($userId);
	//renvoi le frigo de l'utilisateur
});
$app->get('/getAllFridge', function () {
	Frigo::getAllFridge();
	//renvoi tous les frigos
});
/*--------------------------------------------------
					INGREDIENT
--------------------------------------------------*/
$app->get('/getIngredientByID/:ingredientID', function ($ingredientID) {
	//renvoi les infos de l'ingrédient
	$ingredient = Ingredient::getIngredientById($ingredientID);
});
$app->get('/getIngredientByNom/:nom', function ($nom) {
	//renvoi les infos de l'ingredient
	$ingredient = Ingredient::getIngredientByName($nom);
});
$app->get('/getIngredientByPrix/:prix', function ($prix) {
	//renvoi les infos de l'ingredient dont le prix est < ou =
	$ingredient = Ingredient::getIngredientByPrix($prix);
});
$app->get('/getIngredientByCategorie/:categorie', function ($categorie) {
	//renvoi tous les ingredients de la catégorie
	$ingredient = Ingredient::getIngredientByCategorie($categorie);
});
$app->get('/getAllIngredient', function () {
	//renvoi tous les ingredients
	$ingredient = Ingredient::getAllIngredient();
});
$app->get('/getIngredientByRecette/:recetteId', function ($recetteId) {
	//renvoi les ingrédients de la recette
	$ingredient = Ingredient::getIngredientByRecette($recetteId);
});
/*--------------------------------------------------
						CATEGORY
--------------------------------------------------*/
$app->get('/getCategoryName/:categoryId', function ($categoryId) {
	//Retourne le nom de la catégorie de l'id passé en paramètre
	$category = Categorie::getCategoryName($categoryId);
});
$app->get('/getCategoryID/:categoryName', function ($categoryName) {
	//Retourne l'id  de la catégorie avec pour nom celui passé en paramètre
	$category = Categorie::getCategoryId($categoryId);
});
$app->get('/getAllCategory', function () {
	//renvoi toutes les catégories
	$categorie = Categorie::getAllCategory();
});
/*--------------------------------------------------
						RECETTE
--------------------------------------------------*/
$app->get('/getRecette', function () {
	//renvoi les infos de la recette
	Recette::getRecette();
});
$app->get('/getRecetteByID/:recetteID', function ($recetteID) {
	//renvoi les infos de la recette
	Recette::getRecetteByID($recetteID);
});
$app->get('/getRecetteByName/:nomRecette', function ($nomRecette) {
	//renvoi les infos de la recette
	$recette = Recette::getRecetteByName($nomRecette);
});
$app->get('/getRecetteByComplexite/:complexite/:userId', function ($complexite,$userId) {
	//renvoi les recettes avec une complexité < ou =
	$recette = Recette::getRecetteByComplexite($complexite,$userId);
});
$app->get('/getRecetteByNote/:note/:userId', function ($note,$userId) {
	//renvoi les recettes avec une note > ou =
	$recette = Recette::getRecetteByNote($note,$userId);
});
$app->get('/getRecetteByTemps/:temps/:userId', function ($temps,$userId) {
	//renvoi les recettes avec un temps < ou =
	$recette = Recette::getRecetteByTemps($temps,$userId);
});
$app->get('/getRecetteByAll/:complexite/:note/:temps/:userId', function ($complexite, $note, $temps,$userId) {
	$recette = Recette::getRecetteByAll($complexite, $note, $temps, $userId);
});
$app->get('/getAllRecette/:userId', function ($userId) {
	//renvoi toutes les recettes
	$recette = Recette::getAllRecette($userId);
});
$app->get('/getPourcentageIngredient/:recetteId/:userId', function ($recetteId,$userId) {
	//renvoi le pourcentage de recette 
	$recette = Recette::getPourcentageIngredient($recetteId, $userId);
});
$app->post('/addRecette', function () {
	//Ajoute une recette
	$recette = Recette::addRecette($_POST['nomRecette'],$_POST['complexite'],$_POST['note'],$_POST['temps'],$_POST['nbPersonne'],$_POST['description']);
});
$app->post('/addRecette_ingr', function () {
	//Ajoute une recette
	$recette = Recette::addRecette_ingr($_POST['ingredientId'],$_POST['recetteId'],$_POST['quantite']);
});
$app->post('/delRecette', function () {
	//Ajoute une recette
	$recette = Recette::delRecette($_POST['id']);
});
$app->run();

?>