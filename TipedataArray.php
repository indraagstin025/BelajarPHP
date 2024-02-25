<?php

//$values = array(1,2,3,4.5);
//var_dump($values);

//$names = ["Indra", "Agustin", "Agustian"];
//var_dump($names);

//var_dump($names[0]);

//$names[0] = "Agus";
//var_dump($names); 
//unset($names[1]);
//var_dump($names);
//$names[] = "Abdul";
//var_dump($names);

$names = array (
    "id" => "Indra",
    "Name" => "Indra Agustin",
    "Age" => 22,
    "Class" => "1B ",
    "Study Program" => " D4 Teknik Informatika",
    "Campus" => "ULBI",
    "Address" => array(
        "City" => "Bandung",
        "Country" => "Indonesia",
    )

);

$Nama = [
    "id" => "Indra",
    "Nama" => "Indra Agustin",
    "Umur" => 22,
    "Kelas" => "1B",
    "Prodi" => "D4 Teknik Informatika",
    "Kampus" => "ULBI",
    "Alamat" => [
        "Kota" => "Bandung",
        "Negara" => "Indonesia",
    ]
];
var_dump($names);
var_dump($names["Address"]);
var_dump($Nama);
var_dump($Nama["Alamat"]);

