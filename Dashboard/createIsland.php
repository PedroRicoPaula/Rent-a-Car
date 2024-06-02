<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Island;
use FamilyRentCar\BackEnd\App\DBModel;

// Recebe o valor do Form(POST) e verifica se não está vazio o dado inserido
if (!empty($_POST['islandsname'])) {
    $island_exists = Island::search([
        [
            'column' => 'islandsname',
            'operator' => '=',
            'value' => $_POST['islandsname']
        ]
    ]);

if (!empty($island_exists)) {
    echo "Já existe uma ilha com esse nome.";
    exit;
}

    $new_island = new Island();
    $new_island->setIslandsName($_POST['islandsname']);

try {
    // Cria na BD através do DBModel
    $new_island->save();
    header('Location: modifyIslands.php');
} catch (\Exception $e) {
    echo "Houve um erro ao criar o utilizador.". $e->getMessage();
    print_r($e->getTrace());
}
       
} else {
    echo "Todos os campos são obrigatórios.";
    echo '<button><a href="formCreateIslands.php">Criar Ilhas</a></button>';
}

?>