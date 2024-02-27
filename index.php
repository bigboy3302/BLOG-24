<?php 

require "functions.php";
require "Database.php";
$config = [
    "host" => "localhost",
    "dbname" => "blog_ipb-22",
    "user" => "root",
    "password" => "",
    "charset" => "utf8mb4"
];

$db = new Database();
$posts = $db
            ->execute("SELECT * FROM posts")
            -> fetchAll();


echo"<ul>";
foreach($posts as $post){
    echo"<li>" . $post ["title"] . "</li>";
}
echo"</ul>";


?>