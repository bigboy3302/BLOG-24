<?php

require "functions.php";
require "Database.php";
$config = require("Config.php");

// Initialize query to fetch all posts by default
$query = "SELECT * FROM posts";

// Check if id is set in $_GET and not empty, then update the query accordingly
if (isset($_GET["id"]) && $_GET["id"] !== "") {
    $id = $_GET["id"];
    // Sanitize the input to prevent SQL injection
    $id = intval($id);
    // Update the query to fetch a specific post with the given id
    $query = "SELECT * FROM posts WHERE id=$id";
}

// Initialize Database class
$db = new Database();

// Execute the query and fetch posts
$posts = $db
    ->execute($query)
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
