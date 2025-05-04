<?php
class UniversityView{
    public function render($data){
        $dataUniversity = null;
        foreach($data as $val){
            list($id_university, $name, $address, $email, $website, $jenis) = $val;
            $dataUniversity .= "<tr class='text-center align-middle'>
                        <th>" . $id_university . "</th>
                        <td>" . $name. "</td>
                        <td>" . $address . "</td>
                        <td>" . $email . "</td>
                        <td>" . $website . "</td>
                        <td>" . $jenis . "</td>
                        <td>
                            <a href='edit_university.php?id_edit=" . $id_university .  "' class='btn btn-warning''>Edit</a>
                            <a href='university.php?id_hapus=" . $id_university . "' class='btn btn-danger' '>Hapus</a>
                        </td>";
            $dataUniversity .= "</tr>";
        }

        $tpl = new Template("templates/university.html");

        $tpl->replace("JUDUL", "University");
        $tpl->replace("DATA_TABEL", $dataUniversity);
        $tpl->write();
    }

    public function render_create($data){
        $tpl = new Template("templates/create_university.html");

        $tpl->replace("JUDUL", "University");
        $tpl->write();
    }

    public function render_edit($data){
        $dataEdit = $data['data_edit'];
        $id_university = $dataEdit['id_university'];
        $name = $dataEdit['name'];
        $address = $dataEdit['address'];
        $email = $dataEdit['email'];
        $website = $dataEdit['website'];
        $jenis = $dataEdit['jenis'];

        $tpl = new Template("templates/edit_university.html");

        $tpl->replace("JUDUL", "University");
        $tpl->replace("EDIT_ID", $id_university);
        $tpl->replace("EDIT_NAME", $name);
        $tpl->replace("EDIT_ADDRESS", $address);
        $tpl->replace("EDIT_EMAIL", $email);
        $tpl->replace("EDIT_WEBSITE", $website);
        $tpl->replace("JENIS_NEGERI", $jenis == "Negeri" ? "selected" : "");
        $tpl->replace("JENIS_SWASTA", $jenis == "Swasta" ? "selected" : "");
        $tpl->write();
    }
}