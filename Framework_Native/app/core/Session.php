<?php

class Session
{
    public static function set_flash($data)
    {
        $_SESSION["flash"] = $data;
    }

    public static function flash()
    {
        if (isset($_SESSION["flash"])) {
            echo $_SESSION["flash"];
            unset($_SESSION["flash"]);
        }
    }

    public static function set_formError($nama, $data)
    {
        $_SESSION[$nama] = $data;
    }

    public static function formError($nama)
    {
        if (isset($_SESSION[$nama])) {
            echo $_SESSION[$nama];
            unset($_SESSION[$nama]);
        }
    }
}
