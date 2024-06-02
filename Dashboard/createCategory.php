<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Category;
use FamilyRentCar\BackEnd\App\DBModel;

// Recebe os valores do Form(POST) e verifica se não está vazio os dados inseridos
if (!empty($_POST['categoryname']) && !empty($_POST['fuel_type']) && !empty($_POST['type'])) {
    $categoryname_exists = Category::search([
        [
            'column' => 'categoryname',
            'operator' => '=',
            'value' => $_POST['categoryname']
        ]
    ]);

    if (!empty($categoryname_exists)) {
        echo "Já existe uma categoria com esse nome.";
        exit;
    }

        $new_category = new Category($_POST['categoryname'], $_POST['fuel_type'], $_POST['type']);

    try {
        // Cria na BD através do DBModel
        $new_category->save();
        header('Location: modifyCategories.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar uma Categoria.". $e->getMessage();
        print_r($e->getTrace());
    }
       
} else {
    echo "Todos os campos são obrigatórios.";
    echo '<button><a href="formCreateCategories.php">Criar Categorias</a></button>';
}

?>