<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\User;

print_r($_GET);
// Elimina da BD o dado criado no Form
try{
$utilizador = User::find($_GET['id']);
/* var_dump($utilizador); */
$utilizador->delete();
header('location: modifyUsers.php');
} catch(\Exception $e){
    echo "Utilizador não encontrado";
}
?>