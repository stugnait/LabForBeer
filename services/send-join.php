<?php
require "../components/User.php";
require "../vendor/autoload.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = new User($_POST["name"], $_POST["telegram"],$email = $_POST["email"],"" , "");

    $botToken = "6609430462:AAFE6KgQFIlD_YRvYvFGF-IBdFDHaOJ6gT8";
    $chatId = "-4082369627";

    $message = $user->ToMessageJoin();

    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $params = [
        "chat_id" => $chatId,
        "text" => $message,
    ];

    $client = new \GuzzleHttp\Client();

    $client->post($url, [
        'json' => $params,
    ]);

    header("Location: success.php");
    exit();
}
