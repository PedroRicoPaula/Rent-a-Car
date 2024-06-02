<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Address;

print_r($_GET);
// Elimina da BD o dado criado no Form
try{
$address = Address::find($_GET['id']);
/* var_dump($address); */
$address->delete();
header('location: modifyAddress.php');
} catch(\Exception $e){
    echo "Endereço não encontrado";
}
?>