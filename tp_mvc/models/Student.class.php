<?php
class Student extends DB{
    function getStudent(){
        //query
        $query = "SELECT * FROM student";

        //eksekusi query
        return $this->execute($query);
    }

    function addStudent($data){
        //atribut
        $name = $data['name'];
        $nim = $data['nim'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $status = $data['status'];
        $id_university = $data['id_university'];

        //query
        $query = "INSERT INTO student (name, nim, phone, join_date, status, id_university)
        VALUES ( '$name', '$nim', '$phone', '$join_date', '$status','$id_university')";

        //eksekusi query
        return $this->execute($query);
    }

    function deleteStudent($id){
        //query
        $query = "DELETE from student where id_student = '$id'";

        //eksekusi query
        return $this->execute($query);
    }

    function editStudent($id, $data){
        $name = $data['name'];
        $nim = $data['nim'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];
        $status = $data['status'];
        $id_university = $data['id_university'];
    
        //query
        $query = "UPDATE student SET name = '$name', nim = '$nim', phone = '$phone', join_date = '$join_date', status = '$status', id_university = '$id_university' WHERE id_student = '$id'";
    
        //eksekusi query
        return $this->execute($query);
    }
    
    function getStudentById($id){
        //query untuk mengambil data berdasarkan ID
        $query = "SELECT * FROM student WHERE id_student = '$id'";
        
        // eksekusi query
        return $this->execute($query);
    }
}