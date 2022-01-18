<?php

    class GuestBook{

        private $file;

        public function __construct($file)
        {
            $this->file = $file;
        }

        public function addMessage(Message $message)
        {
            $json = $message->toJSON();
            $file = fopen($this->file, "a");
            fwrite($file, $json);
            fclose($file);
        }
    }