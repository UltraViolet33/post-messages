<?php

class Database
{

    protected $host;
    protected $dbname;
    protected $user;
    protected $dbpassword;

    public function setDatabase(string $host = "localhost", string $dbname = "guestbook", string $user = "root", string $dbpassword = "root")
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->dbpassword = $dbpassword;
    }


    public function dbConnect(): PDO
    {
        try {
            $db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8', $this->user, $this->dbpassword);
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
