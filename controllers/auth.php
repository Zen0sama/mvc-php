<?php
class auth extends controller
{
    /* default */
    function index()
    {
        $this->view("defaultLayout", [
            "page" => "home"
        ]);
    }

    /* login */
    function login()
    {
        if (!$_POST) {
            $this->view("defaultLayout", [
                "page" => "login"
            ]);
        } else {
            $_SESSION["user"] = "wibu";
            $this->view("defaultLayout", [
                "page" => "login"
            ]);
        }
    }

    /* register */
    function register()
    {
        $this->view("defaultLayout", [
            "page" => "register"
        ]);
    }
}
