<?php

    require_once("class/Message.php");
    require_once("class/GuestBook.php");


    if(isset($_POST['valider']))
    {
        if(!empty($_POST['username']) && !empty($_POST['message']))
        {
            $username = $_POST['username'];
            $messageUser = $_POST['message'];

            $message = new Message($username, $messageUser);

            if($message->usernameIsValid())
            {
                echo "ok";
            }
            else
            {
                // $msgFormName = "Le pseudo doit faire plus de 3 caractères !";
                $msgFormName = $message->getError()['username'];
                require('index.php');
                die();
            }

            if($message->messageIsValid())
            {
                echo "message ok";
            }
            else
            {
                $msgFormMsg = $message->getError()['message'];
                require('index.php');
                die();
            }

            $guestBook = new GuestBook("messages.txt");

            $guestBook->addMessage($message);
            

           

        }
    }