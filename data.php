<?php

class connection{

    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    
 public function __construct(){
    $conn = new PDO("mysql:host=localhost;dbname=quiz","root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT * FROM questions';
    $stmt = $conn->prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll();

    // $content = file_get_contents("phpjson.json");
   //       
    //
    //  header('Content-Type: application/json');
shuffle($result);
 echo  json_encode($result);
 






    
    //  file_put_contents("phpjson.json", $json_format);
// $conn = NULL;
   
}
}

$fetch_obj = new connection();






?>