<?php
$string = file_get_contents("QST.json");
$array =  json_decode($string);
$connection= mysqli_connect("localhost",'root','','quiz');
//print_r($array)."<br>";

foreach($array as $value){
    $title=$value->title;
    $answer1 = $value->answer_1;
    $answer2 = $value->answer_2;
    $answer3 = $value->answer_3;
    $answer4 = $value->answer_4;
    $correct=$value->right_answer;
    $explication = $value->explication;
    
    $sql = "INSERT INTO `questions`(`title`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `right_answer`, `explication`) VALUES ('$title','$answer1','$answer2','$answer3','$answer4','$correct','$explication') ";

    $query = mysqli_query($connection,$sql);
}



?>