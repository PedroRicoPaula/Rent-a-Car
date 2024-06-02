<?php
include ('autoload.php');
use FamilyRentCar\BackEnd\App\Reservation;

print_r($_GET);
//Apaga a  reserva selecionada
try{
$reservation = Reservation::find($_GET['id']);
/* var_dump($reservation); */
$reservation->delete();
header('location: myReservations.php');
} catch(\Exception $e){
    echo "Reserva não encontrada";
}
?>