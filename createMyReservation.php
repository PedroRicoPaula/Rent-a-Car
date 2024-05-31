<?php
include ('autoload.php');
use FamilyRentCar\BackEnd\App\Reservation;
use FamilyRentCar\BackEnd\App\Client;
use FamilyRentCar\BackEnd\App\Location;
use FamilyRentCar\BackEnd\App\Category;
use FamilyRentCar\BackEnd\App\DBModel;

if(!empty($_POST['date_collection']) && (!empty($_POST['date_delivery'])) && !empty($_POST['hour_collection']) && (!empty($_POST['hour_delivery'])) && (!empty($_POST['client'])) &&
!empty($_POST['locationCollection']) && (!empty($_POST['category'])) && !empty($_POST['locationDelivery'])) {
    $reservation_exists = Reservation::search([
        [
            'column' => 'date_collection',
            'operator' => '=',
            'value' => $_POST['date_collection']
        ],
        [
            'column' => 'date_delivery',
            'operator' => '=',
            'value' => $_POST['date_delivery']
        ]
    ]);

    if (!empty($reservation_exists)) {
        echo "Já existe uma reserva com essas datas.";
        exit;
    }

    //Verificar se a quantidade de veiculos da categoria (A, B ou C) for = 0, não dá para fazer reserva com essa categoria

        $new_reservation = new Reservation(
            $_POST['date_collection'], 
            $_POST['date_delivery'], 
            $_POST['hour_collection'], 
            $_POST['hour_delivery'], 
            Client::find($_POST['client']),
            Location::find($_POST['locationCollection']), 
            Category::find(($_POST['category'])),
            Location::find($_POST['locationDelivery']),
        );

    try {
        $new_reservation->save();
        header('Location: index.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar a Reserva.". $e->getMessage();
        print_r($e->getTrace());
    }
       
} else {
    echo "Todos os campos são obrigatórios.<br>";
    echo '<button><a href="index.php">Criar Reservas</a></button>';
}

?>