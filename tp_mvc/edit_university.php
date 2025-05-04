<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/University.controller.php");

$university = new UniversityController();

if(!empty($_GET['id_edit'])){
  $id_university = $_GET['id_edit'];
  $university->index_edit($id_university);
}else if(isset($_POST['submit'])){
  // mengambil post data
  $data = [
    'id_university' => $_POST['id_university'],
    'name' => $_POST['name'],
    'address' => $_POST['address'],
    'email' => $_POST['email'],
    'website' => $_POST['website'],
    'jenis' => $_POST['jenis']
  ];
    
  // Lengkapi bagian untuk mengambil post data
  $university->edit($data);
}