<?php
include_once("views/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/University.controller.php");

$university = new UniversityController();

if(isset($_POST['submit'])){
  // Lengkapi bagian untuk mengambil post data
  $data = [
    'name' => $_POST['name'],
    'address' => $_POST['address'],
    'email' => $_POST['email'],
    'website' => $_POST['website'],
    'jenis' => $_POST['jenis']
  ];
  $university->add($data);
}else{
  $university->index_create();
}