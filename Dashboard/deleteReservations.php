<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Reservation;

print_r($_GET);

try{
$reservation = Reservation::find($_GET['id']);
/* var_dump($reservation); */
$reservation->delete();
header('location: modifyReservation.php');
} catch(\Exception $e){
    echo "Reserva não encontrada";
}
?>