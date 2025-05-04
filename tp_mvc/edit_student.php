<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Student.controller.php");

$student = new StudentController();

if(!empty($_GET['id_edit'])){
  $id_student = $_GET['id_edit'];
  $student->index_edit($id_student);
}else if(isset($_POST['submit'])){
  // mengambil post data
  $data = [
    'id_student' => $_POST['id_student'],
    'name' => $_POST['name'],
    'nim' => $_POST['nim'],
    'phone' => $_POST['phone'],
    'join_date' => $_POST['join_date'],
    'status' => $_POST['status'],
    'id_university' => $_POST['id_university']
  ];

  $student->edit($data);
}
