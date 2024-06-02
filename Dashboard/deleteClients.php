<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Client;

print_r($_GET);
// Elimina da BD o dado criado no Form
try{
$client = Client::find($_GET['id']);
/* var_dump($client); */
$client->delete();
header('location: modifyClients.php');
} catch(\Exception $e){
    echo "Cliente não encontrado";
}
?>