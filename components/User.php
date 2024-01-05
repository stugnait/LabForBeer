<?php

class User
{
    public $name;
    public $telegram;
    public $lastOrderID;
    public $userID;

    /**
     * @param $name
     * @param $telegram
     * @param $lastOrderID
     * @param $userID
     */
    public function __construct($name, $telegram, $lastOrderID, $userID)
    {
        $this->name = $name;
        $this->telegram = $telegram;
        $this->lastOrderID = $lastOrderID;
        $this->userID = $userID;
    }


    public function __partial($name, $telegram)
    {
        $this->name = $name;
        $this->telegram = $telegram;
    }

    private function ToMessage_Name()
    {
        return "Ім'я -> " . $this->name . "\n";
    }

    private function ToMessage_Telegram()
    {
        return "Телеграм -> " . $this->telegram . "\n";
    }

    public function ToMessage()
    {
        return $this->ToMessage_Name() . $this->ToMessage_Telegram();
    }
}