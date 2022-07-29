<?php
class home extends controller
{
    protected $array = ["page" => "home", "title"=> "Trang chủ"];
    function __construct()
    {
        if(isset($_SESSION['user'])){
            $model = $this->model("user");
            $qr = $model->getUser($_SESSION['user']);
            if (mysqli_num_rows($qr) > 0) {
                $this -> array["user"] = mysqli_fetch_array($qr);
            }
        }
    }
    /* default */
    function index()
    {
        $this->view("defaultLayout",$this -> array);
    }
}
