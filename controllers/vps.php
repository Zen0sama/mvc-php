<?php
class vps extends controller
{
    /* default */
    function index()
    {
        $this->view("defaultLayout",[
            "page"=>"vps",
            "title" => "VPS"
        ]);
    }
}
