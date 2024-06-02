<?php
include ('../autoload.php');
use FamilyRentCar\BackEnd\App\Category;

print_r($_GET);
// Elimina da BD o dado criado no Form
try{
$category = Category::find($_GET['id']);
/* var_dump($category); */
$category->delete();
header('location: modifyCategories.php');
} catch(\Exception $e){
    echo "Categoria não encontrada";
}
?>