<?php

class Database
{
    private $db;

    public function __construct()
    {
        // koneksi database
        $this->db = mysqli_connect(DB_host, DB_user, DB_pass, DB_name);
    }

    public function getDB()
    {
        return $this->db;
    }

    public function query($query)
    {
        return mysqli_query($this->db, $query);
    }

    public function result($query)
    {
        $result = $this->query($query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function row($query)
    {
        $result = $this->query($query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function insert($table, $data)
    {
        $query = "INSERT INTO $table VALUES $data";
        $this->query($query);
    }

    public function delete($table, $where, $data_where)
    {
        $this->query("DELETE FROM $table WHERE $where = $data_where");
    }

    public function update($table, $update, $where, $data_where)
    {
        $this->query("UPDATE $table SET $update WHERE $where = $data_where");
    }

    public function rowCount()
    {
        return mysqli_affected_rows($this->db);
    }
}
