<?php
    $mhs = array(
        array("Ardika","22347215","Denpasar"),
        array("Wahyu","22347067","Malang"),
        array("Zanty","22347342","Surabaya"),
        array("Zizi","22347117","Flores"),
    );
    header("Content-Type: application/json");
    echo json_encode($mhs);
