<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Vehicle;
use FamilyRentCar\BackEnd\App\Category;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['brand']) && (!empty($_POST['plate'])) && !empty($_POST['color']) && !empty($_POST['fuel']) &&
(!empty($_POST['numbags']))&& !empty($_POST['sits']) /* && !empty($_POST['file']) */ && (!empty($_POST['category']))) {
    $vehicle_exists = Vehicle::search([
        [
            'column' => 'plate',
            'operator' => '=',
            'value' => $_POST['plate']
        ]
    ]);

    if (!empty($vehicle_exists)) {
        echo "Já existe um veiculo com essa placa.";
        exit;
    }

    /* $file_name = $_FILES['file']['name'];
    $folder = 'Images/' . $file_name; */

    $new_vehicle = new Vehicle($_POST['brand'], $_POST['plate'], $_POST['color'], $_POST['fuel'], $_POST['numbags'], 
    $_POST['sits']/* , $_POST['file'] */, Category::find(($_POST['category'])));
    
    try {
        $new_vehicle->save();
        header('Location: modifyVehicles.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar uma Localização. " . $e->getMessage();
        print_r($e->getTrace());
    }
       
} else {
    echo "Todos os campos são obrigatórios.";
    echo '<button><a href="formCreateVehicles.php">Criar Veiculos</a></button>';
}

?>