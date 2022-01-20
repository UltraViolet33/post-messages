<?php
/**
 * action.php
 * Manage the form
 * @author Ulysse Valdenaire
 * 20/01/2022
*/

require_once("class/Message.php");
require_once("class/GuestBook.php");

if (isset($_POST['valider'])) {
    if (!empty($_POST['username']) && !empty($_POST['message'])) {
        $username = $_POST['username'];
        $messageUser = $_POST['message'];
        $message = new Message($username, $messageUser);

        if (!$message->usernameIsValid()) {
            $msgFormName = $message->getError()['username'];
            require('index.php');
            die();
        }

        if (!$message->messageIsValid()) {
            $msgFormMsg = $message->getError()['message'];
            require('index.php');
            die();
        }

        if ($message->usernameIsValid() && $message->messageIsValid()) {
            $guestBook = new GuestBook();
            $guestBook->addMessage($message);
            require_once('index.php');
        }
    }
}