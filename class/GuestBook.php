<?php

declare(strict_types=1);

require_once "Database.php";

class GuestBook extends Database
{
    
    public function __construct()
    {
        $this->setDatabase();
    }
    

    public function addMessage(Message $message): void 
    {
        $data = $message->getData();
        $req = $this->dbConnect()->prepare("INSERT INTO messages(username, message) VALUES(?,?)");
        $req->execute(array($data['username'], $data['message']));
    }


    public function getMessages(): array
    {
        $req = $this->dbConnect()->query("SELECT * FROM messages");
        return $req->fetchAll();
    }
}