<?php
// Array dengan index nama dan umur
$data = array(
    array("nama" => "iqbal", "umur" => 25),
    array("nama" => "Aceng", "umur" => 30),
    array("nama" => "Bobi", "umur" => 28),
    array("nama" => "Ema", "umur" => 22),
    array("nama" => "Dafa", "umur" => 35),
    array("nama" => "Sopya", "umur" => 27),
    array("nama" => "Alwi", "umur" => 33),
    array("nama" => "Okva", "umur" => 29),
    array("nama" => "William", "umur" => 31),
    array("nama" => "Ella", "umur" => 26),
    array("nama" => "James", "umur" => 24),
    array("nama" => "Emily", "umur" => 32),
    array("nama" => "Danil", "umur" => 23),
    array("nama" => "Enjang", "umur" => 34),
    array("nama" => "Margha", "umur" => 21)
);

// Konversi ke JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>
