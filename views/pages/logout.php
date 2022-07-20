<?php if (isset($_SESSION["user"])) {
    unset($_SESSION["user"]);
}
load_url("/");
