<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Student.controller.php");

$student = new StudentController();

if(!empty($_GET['id_hapus'])){
    // Lengkapi bagian untuk menghapus data
    $id_student = $_GET['id_hapus'];
    $student->delete($id_student);
}else{
    $student->index();
}