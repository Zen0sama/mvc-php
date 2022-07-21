<?php
class user extends db
{
    /* Check login */
    public function auth($username, $password)
    {
        $qr = "SELECT `username`, `password` FROM `account` WHERE `username` = '$username'";
        $query = mysqli_query($this->con, $qr);
        if (mysqli_num_rows($query) == 0) {
            return false;
        }
        $row = mysqli_fetch_array($query);
        if ($password != $row['password']) {
            return false;
        }
        return true;
    }

    /* CREAT */
    public function addUser($username, $password)
    {
        $qr = "INSERT INTO `account` (`username`, `password`) VALUES ('$username', '$password')";
        return mysqli_query($this->con, $qr);
    }

    /* READ */
    public function getUser($username)
    {
        $qr = "SELECT * FROM `account` WHERE `username` = '$username'";
        return mysqli_query($this->con, $qr);
    }

    public function getUsers()
    {
    }

    /* UPDATE */
    public function updateUser()
    {
    }

    /* DELETE */
    public function deleteUser()
    {
    }
}
