<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Location;
use FamilyRentCar\BackEnd\App\Island;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['locationname']) && (!empty($_POST['island']))) {
    $location_exists = Location::search([
        [
            'column' => 'locationname',
            'operator' => '=',
            'value' => $_POST['locationname']
        ]
    ]);


    if (!empty($location_exists)) {
        echo "Já existe uma localidade com esse nome.";
        exit;
    }

    $new_location = new Location($_POST['locationname'], Island::find(($_POST['island'])));
    
    try {
        $new_location->save();
        header('Location: modifyLocations.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar uma Localização. " . $e->getMessage();
        print_r($e->getTrace());
    }
       
} else {
    echo "Todos os campos são obrigatórios.";
    echo '<button><a href="formCreateLocations.php">Criar Localizações</a></button>';
}

?>