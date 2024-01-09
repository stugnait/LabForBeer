<?php

class User
{
    public $name;
    public $telegram;
    public $lastOrderID;
    public $userID;
    public $email;

    /**
     * @param $name
     * @param $telegram
     * @param $lastOrderID
     * @param $userID
     * @param $email
     */
    public function __construct($name, $telegram, $email, $lastOrderID, $userID)
    {
        $this->name = $name;
        $this->telegram = $telegram;
        $this->lastOrderID = $lastOrderID;
        $this->userID = $userID;
        $this->email = $email;
    }

    private function ToMessageName()
    {
        return "Ім'я - " . $this->name . "\n";
    }

    private function ToMessageTelegram()
    {
        return "Телеграм - " . $this->telegram . "\n";
    }
    private function ToMessageEmail()
    {
        return "Email - " . $this->email . "\n";
    }
    public function ToMessageJoin()
    {
        return "Заявка на вступ в LFB\n \n" . $this->ToMessageName() . $this->ToMessageTelegram() . $this->ToMessageEmail();
    }
}