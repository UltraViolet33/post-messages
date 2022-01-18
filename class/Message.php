<?php



    class Message
    {
        private $username;
        private $message;
        private $date;

        public function __construct($username, $message, $date=null)
        {
            $this->username = $username;
            $this->message = $message;
        }

        public function usernameIsValid()
        {
            if(strlen($this->username) > 3)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function messageIsValid()
        {
            if(strlen($this->message) > 10)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        public function getError()
        {
            $error = ['username'=>"Le pseudo doit faire plus de 3 caractères !", 'message'=>"Le message doit faire plus de 10 caractères !"];
            return $error;
        }

        public function toJSON()
        {
            $data = ['username'=>$this->username, "message"=>$this->message];
            $json = json_encode($data);
           
            return $json;
        }
    }