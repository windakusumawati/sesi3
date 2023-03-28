<?php
//Model 1
    $age = array("Peter"=> "35" , "Ben"=>"37" , "Joe"=>"43");

//Model 2
    $age['Yoga'] = "35";
    $age['Anggi'] = "65";
    $age['Jesica'] = "40";
    $age['Yudha'] = "39";
    $age['Anggun'] = "30";

    header("Content-Type: application/json");
    echo json_encode($age);



