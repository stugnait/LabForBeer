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

    $keyboard = [
        [
            ['text' => 'Кнопку не тикати', 'callback_data' => 'take_task'],
        ],
    ];

    $url = "https://api.telegram.org/bot$botToken/sendMessage";

    $params = [
        "chat_id" => $chatId,
        "text" => $message,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => 'Взяти лабу', 'callback_data' => 'test_2'],
                ],
            ],
            'one_time_keyboard' => TRUE,
        ]),
    ];

    $client = new \GuzzleHttp\Client();
    
    $client->post($url, [
        'json' => $params,
    ]);

    header("Location: success.php");
    exit();
}
