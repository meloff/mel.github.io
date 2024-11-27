<?php
// Проверка подписей и статуса операции
if (isset($_POST['m_operation_id']) && isset($_POST['m_sign']))
{
    // Ваш секретный ключ
    $m_key = '123';

    // Формируем массив данных для проверки подписи
    $arHash = array(
        $_POST['m_operation_id'],
        $_POST['m_operation_ps'],
        $_POST['m_operation_date'],
        $_POST['m_operation_pay_date'],
        $_POST['m_shop'],
        $_POST['m_orderid'],
        $_POST['m_amount'],
        $_POST['m_curr'],
        $_POST['m_desc'],
        $_POST['m_status']
    );

    // Дополнительно, если есть параметр m_params
    if (isset($_POST['m_params']))
    {
        $arHash[] = $_POST['m_params'];
    }

    // Добавляем секретный ключ в конец массива
    $arHash[] = $m_key;

    // Генерация подписи
    $sign_hash = strtoupper(hash('sha256', implode(':', $arHash)));

    // Проверка подписи и статуса
    if ($_POST['m_sign'] == $sign_hash && $_POST['m_status'] == 'success')
    {
        // Если подпись верна и статус успех, выводим сообщение об успешной оплате
        echo $_POST['m_orderid'] . '|success';
    }
    else
    {
        // В противном случае выводим ошибку
        echo $_POST['m_orderid'] . '|error';
    }
}
?>
