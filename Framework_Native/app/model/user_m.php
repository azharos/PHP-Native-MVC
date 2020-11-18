<?php

class User_m
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function result()
    {
        return $this->db->result("SELECT * FROM mahasiswa");
    }

    public function getMhsById($data)
    {
        return $this->db->row("SELECT * FROM mahasiswa WHERE id = $data");
    }

    public function tambahData($data)
    {
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        $query = "(NULL,'$nim','$nama','$jurusan')";
        $this->db->insert("mahasiswa", $query);

        return $this->db->rowCount();
    }

    public function deleted($id)
    {
        $this->db->delete("mahasiswa", "id", $id);
    }

    public function editData($data)
    {
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        $values = "nim = '$nim', nama = '$nama', jurusan = '$jurusan'";
        $this->db->update("mahasiswa", $values, "id", $id);

        return $this->db->rowCount();
    }
}
