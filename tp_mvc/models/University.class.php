<?php
class University extends DB{
    function getUniversity(){
        //query
        $query = "SELECT * FROM university";

        //eksekusi query
        return $this->execute($query);
    }

    function addUniversity($data){
        //atribut
        $name = $data['name'];
        $address = $data['address'];
        $email = $data['email'];
        $website = $data['website'];
        $jenis = $data['jenis'];

        //query
        $query = "INSERT INTO university (name, address, email, website, jenis)
        VALUES ('$name', '$address', '$email', '$website', '$jenis')";

        //eksekusi query
        return $this->execute($query);
    }

    function deleteUniversity($id){
        //query
        $query = "DELETE from university where id_university = '$id'";

        //eksekusi query
        return $this->execute($query);
    }

    function editUniversity($id, $data){
        $name = $data['name'];
        $address = $data['address'];
        $email = $data['email'];
        $website = $data['website'];
        $jenis = $data['jenis'];

        // query with placeholders
        $query = "UPDATE university SET name = '$name', address = '$address', email = '$email', website = '$website', jenis = '$jenis' WHERE id_university=$id";

        return $this->execute($query);
    }
    
    function getUniversityById($id){
        //query untuk mengambil data berdasarkan ID
        $query = "SELECT * FROM university WHERE id_university = '$id'";
        
        // eksekusi query
        return $this->execute($query);
    }
}