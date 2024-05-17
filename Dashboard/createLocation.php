<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Location;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['locationname'])) {
    $location_exists = Location::search([
        [
            'column' => 'locationname',
            'operator' => '=',
            'value' => $_POST['locationname']
        ]
    ]);

if (!empty($location_exists)) {
    echo "Já existe uma ilha com esse nome.";
    exit;
}

    $new_location = new Location();
    $new_location->setLocationname($_POST['locationname']);

try {
    $new_location->save();
    header('Location: index.php');
} catch (\Exception $e) {
    echo "Houve um erro ao criar uma Localização.";
}
       
} else {
    echo "Todos os campos são obrigatórios.";
}

?>