<?php
function isNulOrEmty($value): bool
{
    return  empty($value) || $value == '';
}

function isSpecialCharacter($value): bool
{
    return !preg_match('/^[a-z\d]{5,20}$/i', $value);
}

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

function show_user()
{
    if (is_login()) {
        echo 
            "<div onclick=\"showMenuUser()\">
                <a class=\"auth__login dropbtn flex px-1 md:px-4 py-1 md:py-2 item-centers rounded\">
                 <span class=\"material-icons mr-2 dropbtn\">account_circle</span>".$_SESSION["user"].
                "</a>
            </div>";
    } else {
        echo "<a href=\"http://localhost/auth/login\" class=\"auth__login flex px-1 md:px-4 py-1 md:py-2 item-centers rounded\">
            <span class=\"material-icons mr-2\">login</span>Đăng Nhập
            </a>";
    }
}

function format_money($number)
{
    return number_format($number, 0, ',', '.');
}