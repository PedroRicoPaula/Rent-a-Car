<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Category;
use FamilyRentCar\BackEnd\App\DBModel;

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
        $new_category->save();
        header('Location: index.php');
    } catch (\Exception $e) {
        echo "Houve um erro ao criar uma Categoria.";
    }
       
} else {
    echo "Todos os campos são obrigatórios.";
}

?>