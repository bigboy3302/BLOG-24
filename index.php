<?php

require "functions.php";
require "Database.php";
$config = require("Config.php");

// Initialize query to fetch all posts by default
$query = "SELECT * FROM posts";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] !== "") {
    $id = $_GET["id"];
    $id = intval($id);
    $query .=  " WHERE id=:id";
    $params = [":id" => $id];
}

// Initialize Database class
$db = new Database($config);

// Execute the query and fetch posts
$posts = $db
    ->execute($query, $params)
    ->fetchAll();

// Start HTML form
echo "<form method='GET'>"; 
echo "<input type='text' name='id'/>"; // Changed 'name' attribute to 'id' and added 'type' attribute
echo "<button type='submit'>Submit</button>"; 
echo "</form>";

// Display posts
echo "<h1>POSTS</h1>";
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
echo "</ul>";

?>
