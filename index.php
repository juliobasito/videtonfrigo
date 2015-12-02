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
});
$app->get('/getAllUser', function() {
	//renvoi toutes les infos de tous les utilisateurs
	$user = User::getAllUser();
});
$app->get('/AddUser/:pseudo/:email/:password/:birthdate/:city/:budget', function($pseudo, $email, $password, $birthdate,$city,$budget) {
	//ajoute un utilisateur
	$user = User::AddUser($pseudo, $email, $password, $birthdate,$city,$budget);
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
$app->get('/AddFrigo/:userid/:ingredientid', function ($userid, $ingredientid) {
	Frigo::AddFrigo($userid, $ingredientid);
	//ajoute un frigo
});
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
$app->get('/AddIngredient/:nom/:prix/:peremption/:quantite', function ($nom, $prix, $peremption, $quantite) {
	//Ajoute un ingredient
	$ingredient = Ingredient::AddIngredient($nom, $prix, $peremption, $quantite);
});
$app->get('/getCategorieName/:categorieName', function ($categorieName) {
	//renvoi le nom de la catégorie
	$categorie = Categorie::getCategorieName($categorieName);
});
$app->get('/getCategorieID/:categorieId', function ($categorieId) {
	//renvoi l'id de la catégorie
	$categorie = Categorie::getCategorieId($categorieId);
});
$app->get('/getAllCategorie', function () {
	//renvoi toutes les catégories
	$categorie = Categorie::getAllCategorie();
});
$app->get('/AddCategorie/:nomCategorie', function ($nomCategorie) {
	//ajoute une categorie
	$categorie = Categorie::AddCategorie($nomCategorie);
});

$app->get('/getRecetteByID/:recetteID', function ($recetteID) {
	//renvoi les infos de la recette
	$recette = Recette::getRecetteByID($recetteID);
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
$app->get('/AddRecette/:nomrecette/:complexite/:note/:temps/:nbpersonne/:description/:urlimg', function ($nomrecette, $complexite, $note, $temps, $nbpersonne, $description, $urlimg) {
	//renvoi toutes les catégories
	$recette = Recette::AddRecette($nomrecette, $complexite, $note, $temps, $nbpersonne, $description, $urlimg);
});

$app->get('/connexion/:pseudo/:password', function ($pseudo, $password) {
	User::connexion($pseudo, $password);
	//retourne userID si ok sinon retourne 0
});
$app->run();

?>
































