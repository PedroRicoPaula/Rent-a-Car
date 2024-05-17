<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Client;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['cellphone'])) {
    $client_exists = Client::search([
        [
            'column' => 'email',
            'operator' => '=',
            'value' => $_POST['email']
        ]
    ]);

if (!empty($client_exists)) {
    echo "Já existe um cliente com esse email.";
    exit;
}

    $new_client = new Client();
    $new_client->setEmail($_POST['email']);
    $new_client->setName($_POST['name']);
    $new_client->setCellphone($_POST['cellphone']);

try {
    $new_client->save();
    header('Location: modifyClients.php');
} catch (\Exception $e) {
    echo "Houve um erro ao criar o cliente.";
}
       
} else {
    echo "Todos os campos são obrigatórios.";
}

?>