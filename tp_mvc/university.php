<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/University.controller.php");

$university = new UniversityController();

if(!empty($_GET['id_hapus'])){
    // Lengkapi bagian untuk menghapus data
    $id = $_GET['id_hapus'];
    $university->delete($id);
}else{
    $university->index();
}