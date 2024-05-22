<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Reservation;
use FamilyRentCar\BackEnd\App\Client;
use FamilyRentCar\BackEnd\App\Location;
use FamilyRentCar\BackEnd\App\Vehicle;
use FamilyRentCar\BackEnd\App\DBModel;


                                    /* Terminar ABAIXO  */
if (!empty($_POST['street']) && !empty($_POST['postal_code1']) && !empty($_POST['postal_code2']) && !empty($_POST['door']) && (!empty($_POST['location']))) {
    $address_exists = Address::search([
        [
            'column' => 'street',
            'operator' => '=',
            'value' => $_POST['street']
        ]
    ]);

    if (!empty($address_exists)) {
        echo "Já existe um endereço com esse nome.";
        exit;
    }
        $postal_code = $_POST['postal_code1'] . "-" . $_POST['postal_code2'];

        $new_address = new Address($_POST['street'], $postal_code, $_POST['door'], Location::find($_POST['location']));

    try {
        $new_address->save();
        header('Location: modifyAddress.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar o Endereço.". $e->getMessage();
        print_r($e->getTrace());
    }
       
} else {
    echo "Todos os campos são obrigatórios.<br>";
    echo '<button><a href="formCreateReservations.php">Criar Reservas</a></button>';
}

?>