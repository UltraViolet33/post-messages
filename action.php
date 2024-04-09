<?php

require_once "class/Message.php";
require_once "class/GuestBook.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['username']) && !empty($_POST['message'])) {
        $username = $_POST['username'];
        $messageUser = $_POST['message'];
        $message = new Message($username, $messageUser);

        if ($message->usernameIsValid() && $message->messageIsValid()) {
            $guestBook = new GuestBook();
            $guestBook->addMessage($message);
            header("Location: index.php");
            die;
        }
    }

    header("Location: index.php");
    die;
}