<?php



require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);


//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["title"]) !="" && $_POST["category-id"] <= 3 && strlen($_POST["title"]) <=255) {
if ($_SERVER["REQUEST_METHOD"] == "POST" ){
    $errors = [];

    if(!Validator::string($_POST["title"], min: 1, max: 255)){
        $errors["title"] = "Title cannot be empty";
    }
    
    if(!Validator::number($_POST["category_id"],  min: 1,   max: 3 )){
        $errors["category_id"] = "category ID invalid";
    }
    if(empty($errors)){ 
  $query = "UPDATE posts
            SET title = :title, categoru-id, :category-id
            WHERE id = :id";
  $params = [
    ":title" => $_POST["title"],
    ":category_id" => $_POST["category-id"],
    ":id" -> $_POST["id"],
  ];
  $db->execute($query, $params);

  header("Location: /");
  die();
    }


} 
  
$query = "SELECT * FROM posts WHERE id = :id";
$params = [":id" => $_GET["id"]];
$post = $db -> execute($query, $params)-> fetch();

$title = "Create a Post";
require "views/posts/edit.view.php";