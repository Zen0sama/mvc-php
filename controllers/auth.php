<?php
class auth extends controller
{
    /* default */
    function index()
    {
        $this->view("defaultLayout", [
            "page" => "login",
            "title" => "Đăng nhập"
        ]);
    }

    /* login */
    function login()
    {
        /* Default data */
        $array = ["page" => "login", "title" => "Đăng nhập"];

        /* Check request POST or GET */
        if (!$_POST) {
            return $this->view("defaultLayout", $array);
        }

        /* Check request real or fake */
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            $array['error'] = "Request không đúng";
            return $this->view("defaultLayout", $array);
        }
        /* Get data */
        $username = $_POST['username'];
        $password = $_POST['password'];

        /* Check null or empty */
        if (isNulOrEmty($username) || isNulOrEmty($password)) {
            $array['error'] = "Điền đủ nội dung";
            return $this->view("defaultLayout", $array);
        }

        /* Check username */
        if (isSpecialCharacter($username)) {
            $array['error'] = "Tên tài khoản không đúng định dạng";
            return $this->view("defaultLayout", $array);
        }

        /* Call model */
        $model = $this->model("user");

        /* Check login */
        $qr = $model->auth($username, md5($password));

        if ($qr) {
            $_SESSION["user"] = $username;
            $array['success'] = "Đăng nhập thành công";
            $array['page'] = "login";
            return $this->view("defaultLayout", $array);
        }

        /* Set session */
        $array['error'] = "Tài khoản hoặc mật khẩu không chính xác";
        return $this->view("defaultLayout", $array);
    }

    /* register */
    function register()
    {
        /* Default data */
        $array = ["page" => "register", "title" => "Đăng kí"];

        /* Check request POST or GET */
        if (!$_POST) {
            return $this->view("defaultLayout", $array);
        }

        /* Check request real or fake */
        if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['re-password'])) {
            $array['error'] = "Request không đúng";
            return $this->view("defaultLayout", $array);
        }
        /* Get data */
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rePassword = $_POST['re-password'];

        /* Check null or empty */
        if (isNulOrEmty($username) || isNulOrEmty($password) || isNulOrEmty($rePassword)) {
            $array['error'] = "Điền đủ nội dung";
            return $this->view("defaultLayout", $array);
        }

        /* Check username */
        if (isSpecialCharacter($username)) {
            $array['error'] = "Tên tài khoản không đúng định dạng";
            return $this->view("defaultLayout", $array);
        }

        /* Check repassword with password */
        if ($password != $rePassword) {
            $array['error'] = "Mật khẩu xác nhận không đúng";
            return $this->view("defaultLayout", $array);
        }

        /* call model */
        $model = $this->model("user");

        /* Check user already exists */
        $qr = $model->getUser($username);
        if (mysqli_num_rows($qr) > 0) {
            $array['error'] = "Người dùng đã tồn tại";
            return $this->view("defaultLayout", $array);
        }

        /* Insert user to table */
        $qr = $model->addUser($username, md5($password));
        if ($qr == 1) {
            $_SESSION["user"] = $username;
            $array['success'] = "Đăng kí thành công";
            $array['page'] = "register";
            return $this->view("defaultLayout", $array);
        }
    }

    /* register */
    function logout()
    {
        $this->view("defaultLayout", [
            "page" => "logout",
            "title" => "Đăng xuất"
        ]);
    }
}
