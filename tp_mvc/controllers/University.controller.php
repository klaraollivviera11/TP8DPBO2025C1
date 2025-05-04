<?php
include_once("connection.php");
include_once("models/University.class.php");
include_once("views/University.view.php");

class UniversityController{
    // Properti kontroller
    private $university;

    // Konstruktor Controller university
    function __construct()
    {
        $this->university = new University(Conf::$servername, Conf::$username, Conf::$password, Conf::$db_name);
    }

    // Method yang mengarahkan ke halaman umum controller university
    public function index(){
        // Menyambungkan/membuka jalur ke database
        $this->university->open();

        // Meneruskan request umum dari views (mengambil data university) 
        $this->university->getUniversity();

        // Inisiasi variabel untuk menyimpan data university
        $data = array();

        // Push data yang berbentuk object 1 per 1 ke variabel yang sudah dibuat tadi agar dikemas dalam bentuk array
        while ($row = $this->university->getResult()) {
            array_push($data, $row);
        }

        // Menutup jalur ke database
        $this->university->close();

        // Meneruskannya ke view
        $view = new UniversityView();
        $view->render($data);
    }

    public function index_create(){
        $view = new UniversityView();
        $view->render_create($data);
    }

    public function index_edit($id_university){
        $this->university->open();
        $this->university->getUniversityById($id_university);
            
        $dataEdit = $this->university->getResult();

        $data = array(
            'data_edit' => $dataEdit
        );

        $this->university->close();
        $view = new UniversityView();
        $view->render_edit($data);
    }

    function add($data)
    {
        // Lengkapi controller untuk melakukan add data
        $this->university->open();
        $this->university->addUniversity($data);
        $this->university->close();

        header("location:university.php");
    }

    function edit($data)
    {
        $this->university->open();
        $this->university->editUniversity($data['id_university'], $data);
        $this->university->close();

        header("location:university.php");
    }

    function delete($id)
    {
        // Lengkapi controller untuk melakukan delete data
        $this->university->open();
        $this->university->deleteUniversity($id);
        $this->university->close();

        header("location:university.php");
    }
}