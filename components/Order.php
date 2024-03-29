<?php

class Order
{
    public $userTelegram;
    public $userName;
    public $subject;
    public $labNum;
    public $labVariant;

    /**
     * @param $userTelegram
     * @param $userName
     * @param $subject
     * @param $labNum
     * @param $labVariant
     */
    public function __construct($userName, $userTelegram, $subject, $labNum, $labVariant)
    {
        $this->userName = $userName;
        $this->userTelegram = $userTelegram;
        $this->subject = $subject;
        $this->labNum = $labNum;
        $this->labVariant = $labVariant;
    }

    private function CalculatePriceForEmployee()
    {
        if ($this->subject == "mathcad") {
            return 50 + ($this->labNum * 5);
        } elseif ($this->subject == "proteus") {
            return 50 + ($this->labNum * 5);
        } elseif ($this->subject == "programming") {
            return 20 + ($this->labNum * 5);
        } elseif ($this->subject == "individual") {
            return "Індивідуальне";
        } else {
            return "Unknown";
        }
    }

    private function ToMessagePrice()
    {
        return "Приблизна ціна - " . $this->CalculatePriceForEmployee() . "UAH\n";
    }

    private function ToMessageName()
    {
        return "Ім'я - " . $this->userName . "\n";
    }

    private function ToMessageUserTelegram()
    {
        return "Телеграм - " . $this->userTelegram . "\n";
    }

    private function ToMessageSubject()
    {
        return "Предмет - " . $this->subject . "\n";
    }

    private function ToMessageLabNum()
    {
        return "Номер лабораторної - " . $this->labNum . "\n";
    }

    private function ToMessageLabVariant()
    {
        return "Варіант - " . $this->labVariant . "\n";
    }

    public function ToMessage()
    {
        return "Замовлення\n\n" . $this->ToMessageName() . $this->ToMessageUserTelegram() . $this->ToMessageSubject() . $this->ToMessageLabNum() . $this->ToMessageLabVariant() . $this->ToMessagePrice();
    }

}