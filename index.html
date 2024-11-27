<?php
// Указываем параметры для теста
$m_shop = '2162917268';  // Ваш m_shop (ID магазина)
$m_orderid = uniqid('order_');  // Уникальный номер заказа, используем uniqid для тестов
$m_amount = number_format(100, 2, '.', '');  // Сумма для оплаты (100.00 RUB)
$m_curr = 'RUB';  // Валюта
$m_desc = base64_encode('Тестовый товар');  // Описание товара в base64
$m_key = '123';  // Ваш секретный ключ, полученный на Payeer

// Формирование строки для подписи
$arHash = array(
    $m_shop,
    $m_orderid,
    $m_amount,
    $m_curr,
    $m_desc
);
$arHash[] = $m_key;

// Генерация подписи (SHA-256)
$sign = strtoupper(hash('sha256', implode(':', $arHash)));
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата через Payeer</title>
</head>
<body>
    <h1>Тестовая оплата через Payeer</h1>
    <form method="POST" action="https://payeer.com/merchant/">
        <!-- Указываем обязательные параметры -->
        <input type="hidden" name="m_shop" value="<?= htmlspecialchars($m_shop) ?>">  <!-- Ваш m_shop -->
        <input type="hidden" name="m_orderid" value="<?= htmlspecialchars($m_orderid) ?>">  <!-- Уникальный номер заказа -->
        <input type="hidden" name="m_amount" value="<?= htmlspecialchars($m_amount) ?>">  <!-- Сумма к оплате -->
        <input type="hidden" name="m_curr" value="<?= htmlspecialchars($m_curr) ?>">  <!-- Валюта -->
        <input type="hidden" name="m_desc" value="<?= htmlspecialchars($m_desc) ?>">  <!-- Описание товара -->
        <input type="hidden" name="m_sign" value="<?= htmlspecialchars($sign) ?>">  <!-- Подпись -->

        <!-- Кнопка для перехода к оплате -->
        <button type="submit">Перейти к оплате</button>
    </form>
</body>
</html>
