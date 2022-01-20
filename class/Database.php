<?php
/**
 * Databse.php
 * Manage the connexion to the database
 * @author Ulysse Valdenaire
 * 20/01/2022
 */


/**
 * Database
 */
class Database
{

    protected $host;
    protected $dbname;
    protected $user;
    protected $dbpassword;

    /**
     * setDatabase
     *
     * @param  string $host
     * @param  string $dbname
     * @param  string $user
     * @param  string $dbpassword
     * @return void
     */
    public function setDatabase($host = "localhost", $dbname = "guestbook", $user = "root", $dbpassword = "")
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->dbpassword = $dbpassword;
    }

    /**
     * dbConnect
     * connexion to the database bookgestion
     * @return object $db
     */
    public function dbConnect()
    {
        try {
            $db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8', $this->user, $this->dbpassword);
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}