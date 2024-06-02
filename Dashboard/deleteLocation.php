<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Location;

print_r($_GET);
// Elimina da BD o dado criado no Form
try{
$location = Location::find($_GET['id']);
/* var_dump($location); */
$location->delete();
header('location: modifylocations.php');
} catch(\Exception $e){
    echo "Localidade não encontrada";
}
?>