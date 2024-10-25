<?php
$vehicleName = $_POST["vehicle_name"];
$vehicleType = $_POST["vehicle_type"];
$vehicleModel = $_POST["vehicle_model"];


if (empty($vehicleName)) {
    echo "Please Enter The Vehicle Name";
} else if (empty($vehicleType)) {
    echo "Please Enter The Vehicle Type";
} else if (empty($vehicleModel)) {
    echo "Please Enter The Vehicle Model";
} else {

    $connection = new mysqli("localhost", "root", "HjrNsr123#", "vehi_reg", "3306");
    $query = "INSERT INTO `vehicles`(`name`,`type`,`model`)values('" . $vehicleName . "','" . $vehicleType . "','" . $vehicleModel . "')";
    $connection->query($query);
    echo "Success";
}
?>