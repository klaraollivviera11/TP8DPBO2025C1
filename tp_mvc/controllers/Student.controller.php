<?php
include_once("connection.php");
include_once("models/Student.class.php");
include_once("models/University.class.php");
include_once("views/Student.view.php");

class StudentController{
    //properti kontroller
    private $student;
    private $university;

    //konstruktor
    function __construct(){
        $this->student = new Student(Conf::$servername, Conf::$username, Conf::$password, Conf::$db_name);
        $this->university = new University(Conf::$servername, Conf::$username, Conf::$password, Conf::$db_name);
    }

    //Method umum
    public function index(){
        // Membuka jalur ke database
        $this->student->open();
        $this->university->open();

        // Meneruskan request dari view
        $this->student->getStudent();
        $this->university->getUniversity();

        // Inisiasi variabel berbentuk array untuk menyimpan kedua data table
        $data = array(
            'student' => array(),
            'university' => array()
        );

        // Push 1 per 1 data yang berbentuk objek dan diteruskan ke variabel yg telah dibuat sebelumnya
        while($row = $this->student->getResult()){
            array_push($data['student'], $row);
        }
        while($row = $this->university->getResult()){
            array_push($data['university'], $row);
        }

        // Menutup jalur
        $this->student->close();
        $this->university->close();

        // Inisiasi variable untuk memanggil kelas views dan meneruskan datanya
        $view = new StudentView();
        $view->render($data);
    }
    
    public function index_create(){
        // Membuka jalur ke database
        $this->university->open();

        // Meneruskan request dari view
        $this->university->getUniversity();

        // Inisiasi variabel berbentuk array untuk menyimpan kedua data table
        $data = array(
            'university' => array()
        );

        // Push 1 per 1 data yang berbentuk objek dan diteruskan ke variabel yg telah dibuat sebelumnya
        while($row = $this->university->getResult()){
            array_push($data['university'], $row);
        }

        // Menutup jalur
        $this->university->close();

        // Inisiasi variable untuk memanggil kelas views dan meneruskan datanya
        $view = new StudentView();
        $view->render_create($data);
    }

    public function index_edit($id_student){
        $this->student->open();
        $this->student->getStudentById($id_student);
        $dataEdit = $this->student->getResult();

        $this->university->open();
        $this->university->getUniversity();

        $data = array(
            'data_edit' => $dataEdit,
            'data_university' => array()
        );

        while($row = $this->university->getResult()){
            array_push($data["data_university"], $row);
        }

        $this->student->close();
        $view = new StudentView();
        $view->render_edit($data);
    }

    function add($data)
    {
        // Lengkapin controller untuk melakukan add data
        $this->student->open();
        $this->student->addStudent($data);
        $this->student->close();

        header("location:index.php");
    }

    function edit($data)
    {
        // Lengkapin controller untuk melakukan edit data
        $this->student->open();
        $this->student->editStudent($data['id_student'], $data);
        $this->student->close();

        header("location:index.php");
    }

    function delete($id)
    {
        // Lengkapin controller untuk melakukan delete data
        $this->student->open();
        $this->student->deleteStudent($id);
        $this->student->close();

        header("location:index.php");
    }
    
}