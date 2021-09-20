<?php

$product_id = $_POST["product_id"];
$product_type = $_POST["product_type"];
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_permalink = $_POST["product_permalink"];
$product_size = $_POST["product_size"];

$user_name = $_POST["user_name"];
$user_surname = $_POST["surname"];
$user_number = $_POST["number"];
$user_email = $_POST["compemailany"];
$user_country = $_POST["country"];
$user_street = $_POST["add1"];
$user_house = $_POST["add2"];
$user_floor = $_POST["floor"];
$user_index = $_POST["zip"];

$to      =  'arseniykvasov@gmail.com';
$subject =  'НОВЫЙ ЗАКАЗ!';
$message = '
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

        <style>
            .text ol:not([class])>li:before {
                counter-increment: ol;
                content: counters(ol, ".");
                position: absolute;
                left: 0;
                top: 0;
                color: rgb(24,51,79,.4);
            }
            .text ol:not([class]), .text ul:not([class]) {
                display: block;
                margin: 30px 0;
                padding: 0;
                counter-reset: ol;
            }
            .text ol:not([class])>li, .text ul:not([class])>li {
                display: block;
                font-size: 16px;
                line-height: 24px;
                margin: 0 0 16px 0;
                padding-left: 30px;
                box-sizing: border-box;
                position: relative;
            }

            .text_link {
                color: #93b7bb;
                text-decoration: underline;
            }
            .text_link:hover {
                color: #93b7bb;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <div class="wrap" style="width: 65vw; max-width: 620px; min-width: 540px; margin: 0 auto;">
            <div class="text" style="font-family: "Tenor Sans"; font-style: normal; font-weight: 400; line-height: 24px; font-size: 16px;">
                <h1 style="font-family: "Tenor Sans"; line-height: 40px; font-size: 30px; text-align: center; letter-spacing: .2em; text-transform: uppercase; color: #1f6655; margin: 70px 0 70px -390px; width: 780px; position: relative;
                left: 50%;">Политика обработки персональных данных</h1>
                <ol style="margin: 30px 0;">
                    <li style="display: block;font-size: 16px;line-height: 24px;margin: 0 0 16px 0;padding-left: 30px;box-sizing: border-box;position: relative;">ДАННЫЕ О ЗАКАЗЕ 
                        <ol>
                            <li><b>ID товара</b>: '. $product_id .'</li>
                            <li><b>Тип товара</b>: '. $product_type .'</li>
                            <li><b>Название товара</b>: '. $product_name .'</li>
                            <li><b>Цена товара</b>: '. $product_price .' рублей</li>
                            <li><b>Ссылка на товар</b>: <a href="'. $product_permalink .'">перейти</a></li>
                            <li><b>Размер</b>: '. $product_size .'</li>
                        </ol>
                    </li>

                    <li style="display: block;font-size: 16px;line-height: 24px;margin: 0 0 16px 0;padding-left: 30px;box-sizing: border-box;position: relative;">ДАННЫЕ О ЗАКАЗЧИКЕ 
                        <ol>
                            <li><b>Имя</b>: '. $user_name .'</li>
                            <li><b>Фамилия</b>: '. $user_surname .'</li>
                            <li><b>Номер телефона</b>: '. $user_number .'</li>
                            <li><b>Почта</b>: '. $user_email .'</li>
                        </ol>
                    </li>

                    <li style="display: block;font-size: 16px;line-height: 24px;margin: 0 0 16px 0;padding-left: 30px;box-sizing: border-box;position: relative;">ДАННЫЕ О ДОСТАВКЕ 
                        <ol>
                            <li><b>Город</b>: '. $user_country .'</li>
                            <li><b>Адрес</b>: '. $user_street .', дом '. $user_house .', квартира '. $user_floor .'</li>
                            <li><b>Почтовый индекс</b>: '. $user_index .'</li>
                        </ol>
                    </li>
                </ol>
            </div>

            <p class="intro" style="width: 780px;position: relative;left: 50%;margin-left: -390px;font-family: "Tenor Sans";line-height: 28px;font-size: 17px;text-align: center;letter-spacing: -.05em;margin-bottom: 70px;margin-top: 60px;">Заказчик был перенаправлен на страницу оплаты. Ожидаем чека.</p>
        </div>
    </body>
<html>
';
$headers =  'From: webmaster@example.com'       . "\r\n" .
            'Content-type: text/html; charset=utf-8' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// your registration data
$mrh_login = "mefreedomru";      // your login here
$mrh_pass1 = "xf0A7DIrZ8cHFo07iWHF";   // merchant pass1 here

// order properties
$inv_id    = 7;        // shop's invoice number 
                    // (unique for shop's lifetime)
$inv_desc  = "desc";   // invoice desc
$out_summ  = $product_price;   // invoice summ

// build CRC value
$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1");

// build URL
$url = "https://auth.robokassa.ru/Merchant/Index.aspx?MerchantLogin=$mrh_login&".
    "OutSum=$out_summ&InvId=$inv_id&Description=$inv_desc&SignatureValue=$crc";

?>

<script>
    if(window.opener) {
        window.opener.location.reload();
        setTimeout(() => window.close(), 500);
    } else {
        window.location.replace("<?php echo strval($url); ?>");
    }
</script>