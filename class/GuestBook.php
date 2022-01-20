<?php
/**
 * GuestBook.php
 * Class GuestBook to manage the guestBook
 * @author Ulysse Valdenaire
 * 20/01/2022
*/

require_once("Database.php");

/**
 * GuestBook
 * extends class Database
 */
class GuestBook extends Database
{
    
    /**
     * __construct
     * set the connexion to the database
     * @return void
     */
    public function __construct()
    {
        $this->setDatabase();
    }
    
    /**
     * addMessage
     * @param  Message $message
     * @return void
     */
    public function addMessage(Message $message)
    {
        $data = $message->getData();
        $req = $this->dbConnect()->prepare("INSERT INTO messages(username, message) VALUES(?,?)");
        $result = $req->execute(array($data['username'], $data['message']));
    }

    /**
     * getMessages
     * @return array
     */
    public function getMessages()
    {
        $req = $this->dbConnect()->query("SELECT * FROM messages");
        $req = $req->fetchAll();
        return $req;
    }
}