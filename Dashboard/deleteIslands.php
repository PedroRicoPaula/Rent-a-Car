<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Island;

print_r($_GET);
// Elimina da BD o dado criado no Form
try{
$island = Island::find($_GET['id']);
/* var_dump($island); */
$island->delete();
header('location: modifyIslands.php');
} catch(\Exception $e){
    echo "Ilha não encontrada";
}
?>