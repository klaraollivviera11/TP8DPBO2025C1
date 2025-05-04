<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Student.controller.php");

$student = new StudentController();

if(isset($_POST['submit'])){
  // Lengkapi bagian untuk mengambil post data
  $data = [
    'name' => $_POST['name'],
    'nim' => $_POST['nim'],
    'phone' => $_POST['phone'],
    'join_date' => $_POST['join_date'],
    'status' => $_POST['status'],
    'id_university' => $_POST['id_university']
  ];
  $student->add($data);
}else{
  $student->index_create();
}