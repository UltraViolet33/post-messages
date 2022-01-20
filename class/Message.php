<?php
/**
 * Message.php
 * Class Message to manage a message
 * @author Ulysse Valdenaire
 * 20/01/2022
*/

/**
 * Message
 */
class Message
{
    private $username;
    private $message;
    
    /**
     * __construct
     *
     * @param  string $username
     * @param  string $message
     * @return void
     */
    public function __construct($username, $message)
    {
        $this->username = $username;
        $this->message = $message;
    }
    
    /**
     * usernameIsValid
     * Check if the username is valid
     * @return boolean
     */
    public function usernameIsValid()
    {
        if (strlen($this->username) > 3) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * messageIsValid
     * Check if the message is valid
     * @return boolean
     */
    public function messageIsValid()
    {
        if (strlen($this->message) > 10) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * getError
     * @return array
     */
    public function getError()
    {
        $error = ['username' => "Le pseudo doit faire plus de 3 caractères !", 'message' => "Le message doit faire plus de 10 caractères !"];
        return $error;
    }
    
    /**
     * getData
     * @return array
     */
    public function getData()
    {
        $data = ['username' => $this->username, "message" => $this->message];
        return $data;
    }
}