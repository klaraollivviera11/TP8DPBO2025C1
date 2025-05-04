<?php

class StudentView{
    public function render($data){
        $dataStudent = null;
        foreach($data['student'] as $val){
            list($id_student, $name, $nim, $phone, $join_date, $status, $id_university) = $val;
            $dataStudent .= "<tr class='text-center align-middle'>
                        <th>" . $id_student . "</th>
                        <td>" . $name. "</td>
                        <td>" . $nim . "</td>
                        <td>" . $phone . "</td>
                        <td>" . $join_date . "</td>
                        <td>" . $status . "</td>
                        <td>" . $id_university . "</td>
                        <td>
                            <a href='edit_student.php?id_edit=" . $id_student . "' class='btn btn-warning'>Edit</a>
                            <a href='index.php?id_hapus=" . $id_student . "' class='btn btn-danger'>Hapus</a>
                        </td>";
            $dataStudent .= "</tr>";
        }

        $tpl = new Template("templates/index.html");

        $tpl->replace("JUDUL", "Rumah");
        $tpl->replace("DATA_TABEL", $dataStudent);
        $tpl->write();
    }

    public function render_create($data){
        $dataUniversity = null;
        foreach ($data['university'] as $val){
            list($id_university, $name, $address, $email, $website) = $val;
            $dataUniversity .= "<option value='" . $id_university . "'>" . $name . "</option>";
        }

        $tpl = new Template("templates/create_student.html");

        $tpl->replace("JUDUL", "Rumah");
        $tpl->replace("OPTION", $dataUniversity);
        $tpl->write();
    }

    public function render_edit($data){
        $dataUniversity = null;
        foreach ($data['data_university'] as $val) {
            list($id_university, $name, $address, $email, $website) = $val;
            $selected = ($id_university == $data['data_edit']['id_university']) ? "selected" : "";
            $dataUniversity .= "<option value='" . $id_university . "' " . $selected . ">" . $name . "</option>";
        }

        $dataEdit = $data['data_edit'];
        $id_student = $dataEdit['id_student'];
        $name = $dataEdit['name'];
        $nim = $dataEdit['nim'];
        $phone = $dataEdit['phone'];
        $join_date = $dataEdit['join_date'];
        $status = $dataEdit['status'];

        $tpl = new Template("templates/edit_student.html");

        $tpl->replace("JUDUL", "Edit Student");
        $tpl->replace("OPTION", $dataUniversity);
        $tpl->replace("EDIT_ID", $id_student);
        $tpl->replace("EDIT_NAME", $name);
        $tpl->replace("EDIT_NIM", $nim);
        $tpl->replace("EDIT_PHONE", $phone);
        $tpl->replace("EDIT_JOIN", $join_date);
        $tpl->replace("STATUS_AKTIF", $status == "Aktif" ? "selected" : "");
        $tpl->replace("STATUS_TIDAK_AKTIF", $status == "Tidak Aktif" ? "selected" : "");
        $tpl->write();
    }
}