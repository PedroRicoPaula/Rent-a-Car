<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Vehicle;

print_r($_GET);
// Elimina da BD o dado criado no Form
try{
$vehicle = Vehicle::find($_GET['id']);
/* var_dump($vehicle); */
$vehicle->delete();
header('location: modifyVehicles.php');
} catch(\Exception $e){
    echo "Localidade não encontrada";
}
?>