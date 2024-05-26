<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Client;
use FamilyRentCar\BackEnd\App\DBModel;

if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['cellphone']) && 
!empty($_POST['street']) && !empty($_POST['postal_code1']) && !empty($_POST['postal_code2']) && !empty($_POST['door'])) {
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
        $postal_code = $_POST['postal_code1'] . "-" . $_POST['postal_code2'];
        $new_client = new Client($_POST['email'], $_POST['name'], $_POST['cellphone'], 
        $_POST['street'], $postal_code, $_POST['door']);

    try {
        $new_client->save();
        header('Location: modifyClients.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar o cliente.". $e->getMessage();
        print_r($e->getTrace());
    }
       
} else {
    echo "Todos os campos são obrigatórios.";
    echo '<button><a href="formCreateClients.php">Criar Clientes</a></button>';
}

?>