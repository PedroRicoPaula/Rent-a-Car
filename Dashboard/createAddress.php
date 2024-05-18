<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Address;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['street']) && !empty($_POST['postal_code']) && !empty($_POST['door'])) {
    $address_exists = Address::search([
        [
            'column' => 'street',
            'operator' => '=',
            'value' => $_POST['street']
        ]
    ]);

if (!empty($address_exists)) {
    echo "Já existe um utilizador com esse email.";
    exit;
}

    $new_address = new Address();
    $new_address->setStreet($_POST['street']);
    $new_address->setPostal_code($_POST['postal_code']);
    $new_address->setDoor($_POST['door']);

try {
    $new_address->save();
    header('Location: modifyAddress.php');
} catch (\Exception $e) {
    echo "Houve um erro ao criar o Endereço.";
}
       
} else {
    echo "Todos os campos são obrigatórios.<br>";
    echo '<button><a href="formCreateAddress.php">Criar Address</a></button>';
}

?>