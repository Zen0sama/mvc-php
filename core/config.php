<?php
$defaultUrl = "http://localhost";

function is_login()
{
    $username = isset($_SESSION["user"]) ? $_SESSION["user"] : false;
    if ($username) {
        return true;
    }
    return false;
}

function load_url($url = "")
{
    header('Location: ' . $url . '');
}

function displayUser()
{
    if (is_login()) {
        echo "<a href=\"\" class=\"auth__login flex item-centers\">
        <span class=\"material-icons mr-2\">account_circle</span>".$_SESSION["user"]."</a>";
    } else {
        echo "<a href=\"http://localhost/auth/login\" class=\"auth__login flex item-centers\">
            <span class=\"material-icons mr-2\">login</span>Đăng Nhập
            </a>";
    }
}
