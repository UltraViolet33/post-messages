<?php

class Message
{
    public function __construct(private string $username, private string $message)
    {
    }


    public function usernameIsValid(): bool
    {
        return strlen($this->username) > 3;
    }


    public function messageIsValid(): bool
    {
        return strlen($this->message) > 10;
    }


    public function getError(): array
    {
        return ['username' => "Le pseudo doit faire plus de 3 caractères !", 'message' => "Le message doit faire plus de 10 caractères !"];
    }


    public function getData(): array
    {
        return ['username' => $this->username, "message" => $this->message];
    }
}
