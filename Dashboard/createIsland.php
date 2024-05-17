<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Island;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['islandsname'])) {
    $island_exists = Island::search([
        [
            'column' => 'islandsname',
            'operator' => '=',
            'value' => $_POST['islandsname']
        ]
    ]);

if (!empty($island_exists)) {
    echo "Já existe uma ilha com esse nome.";
    exit;
}

    $new_island = new Island();
    $new_island->setIslandsName($_POST['islandsname']);

try {
    $new_island->save();
    header('Location: index.php');
} catch (\Exception $e) {
    echo "Houve um erro ao criar o utilizador.";
}
       
} else {
    echo "Todos os campos são obrigatórios.";
}

?>