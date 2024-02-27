<?php

class Database{

    public function __construct()
    {
        $config = [
            "host" => "localhost",
            "dbname" => "blog_ipb-22",
            "user" => "root",
            "password" => "",
            "charset" => "utf8mb4"
        ];
        
        $connection_string = "mysql:" . http_build_query($config, "", ";"); 
        //$connection_string = "mysql:host=$config[host];dbname=$config[dbname];user=$config[user];password=$config[password];charset=$config[charset]";
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





