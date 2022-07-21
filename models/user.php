<?php
class user extends db
{
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
