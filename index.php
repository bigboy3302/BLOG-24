<?php 
echo "hello";

$connection_string = "mysql:host=localhost;
dbname=BLOG ipb-22;
user=root;pasword=;
charset=utf8mb4";

$pdo = new PDO($connection_string);

//sagatavot sql izlidei
$query = $pdo-> prepare("SELECT * FROM posts");
$query-> execute();
$posts = $query-> fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($posts);
echo "</pre>";



?>