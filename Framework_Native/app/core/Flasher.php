<?php

class Flasher
{
    public static function set_flash($pesan, $aksi)
    {
        $_SESSION["flash"] = [
            "pesan" => $pesan,
            "aksi" => $aksi
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION["flash"])) {
            echo '<p> Data ' . $_SESSION["flash"]["pesan"] . " " . $_SESSION["flash"]["aksi"] . "<br>";
            unset($_SESSION["flash"]);
        }
    }
}
