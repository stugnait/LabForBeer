<?php
global $config;
global $blog_connection;
global $lfb_connection;

include "../services/config.php";
include "../services/connectDB.php";

$lfb_user_result = mysqli_query($lfb_connection, "SELECT * FROM `user` WHERE 1");
$lfb_employee_result = mysqli_query($lfb_connection, "SELECT * FROM `employee` WHERE 1");
$lfb_order_result = mysqli_query($lfb_connection, "SELECT * FROM `order` WHERE 1");

$moneyEarned = 0;
$moneyPaid = 0;
$orderCounter = 0;
$employeeOrderCounter = 0;
$bestEmployee = "Не визначено";

while ($row = mysqli_fetch_assoc($lfb_order_result)) {
    $moneyEarned += $row['price'];
    $moneyPaid += $row['paid'];
    $orderCounter++;
}
while ($row = mysqli_fetch_assoc($lfb_employee_result)) {
    if ($employeeOrderCounter < $row['ordersCounter']) {
        $bestEmployee = $row['name'];
        $employeeOrderCounter=$row['ordersCounter'];
    }
}

$avgMoneyPerOrder = $moneyEarned / $orderCounter;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    require "../page-components/loader.php"
    ?>
    <title>Статистика</title>
</head>
<body>
<?php
include "../page-components/header.php"
?>

<main class="white-background">
    <div class="white-background-image">
        <div class="labforbeer-info">
            <h1>ОСНОВНА СТАТИСТИКА</h1>
            <div class="labforbeer-info-block">
                <div CLASS="labforbeer-info-line">
                    <p>Кількість клієнтів</p>
                    <p><?php echo $lfb_user_result->num_rows ?></p>
                </div>

                <div CLASS="labforbeer-info-line">
                    <p>Кількість замовлень</p>
                    <p><?php echo $lfb_order_result->num_rows ?></p>
                </div>

                <div CLASS="labforbeer-info-line">
                    <p>Середня вартість замовлення</p>
                    <p><?php echo $avgMoneyPerOrder ?> UAH</p>
                </div>

                <div CLASS="labforbeer-info-line">
                    <p>Найкращий робітник</p>
                    <p><?php echo $bestEmployee ?></p>
                </div>


                <div class="labforbeer-info-added">
                    <h1>Додаткові показники</h1>
                    <div class="labforbeer-info-block">
                        <div CLASS="labforbeer-info-line">
                            <p>Робітників в команді</p>
                            <p><?php echo $lfb_employee_result->num_rows ?></p>
                        </div>
                        <div CLASS="labforbeer-info-line">
                            <p>Коштів зароблено (UAH)</p>
                            <p><?php echo $moneyEarned ?></p>
                        </div>
                        <div CLASS="labforbeer-info-line">
                            <p>Коштів виплачено (UAH)</p>
                            <p><?php echo $moneyPaid ?></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div>
</main>


</body>
</html>