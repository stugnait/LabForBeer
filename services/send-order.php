<?php
    require "../components/Order.php";
    require "../vendor/autoload.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $order = new Order($_POST["name"], $_POST["telegram"],$_POST["subject"],$_POST["labNum"],$_POST["variant"] );
    $email = $_POST["email"];

    $botToken = "6609430462:AAFE6KgQFIlD_YRvYvFGF-IBdFDHaOJ6gT8";
    $chatId = "-4082369627";

    $message = $order->ToMessage();

    if (!empty($_POST["deadline"])){
        $message .= "Дедлайн - " . $_POST["deadline"];
    }

    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $params = [
        "chat_id" => $chatId,
        "text" => $message,
    ];

    $client = new \GuzzleHttp\Client();
    $response = $client->post($url, [
        'json' => $params,
    ]);

    header("Location: success.php");
    exit();
}
