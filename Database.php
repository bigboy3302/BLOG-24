<?php

class Database{

    public function __construct()
    {
        
        $connection_string = "mysql:host=localhost;dbname=BLOG ipb-22;user=root;pasword=;charset=utf8mb4";
    $this->pdo = new PDO($connection_string);
    $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

public function execute($query_string) { 
//sagatavot sql izlidei
$query = $this->pdo-> prepare($query_string);
$query-> execute();

return $query;
}
};
?>





