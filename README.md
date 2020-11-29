# PHP-Native-MVC

DATABASE

Menampilkan Semua Data
// SELECT * FROM table 
// Bentuk Array Assosiatif
$this->result($query);

Menampilkan Data Tertentu
// SELECT * FROM table WHERE id=$id
// Bentuk Array Assosiatif
$this->row($query);

Menambah Data
// INSERT INTO table VALUES data
$this->insert($table,$data)

Menghapus Data
// DELETE FROM table WHERE where=$data_where
// DELETE FROM table WHERE id=id
$this->delete($table,$where,$data_where)

Mengubah Data
// UPDATE $table SET $update WHERE $where = $data_where
$this->update($table,$update,$where,$data_where)

- - -

MODEL

class {model} extends Database{
    ...
}