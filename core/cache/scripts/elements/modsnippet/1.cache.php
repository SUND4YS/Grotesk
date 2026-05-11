<?php  return '// Проверяем, является ли запрос AJAX-запросом и передан ли наш action
if (!empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && strtolower($_SERVER[\'HTTP_X_REQUESTED_WITH\']) == \'xmlhttprequest\') {
    
    if (isset($_POST[\'action\']) && $_POST[\'action\'] == \'feedback\') {
        
        // Санируем полученные данные от спама и инъекций
        $username = filter_var(trim($_POST[\'username\']), FILTER_SANITIZE_STRING);
        $phone = filter_var(trim($_POST[\'phone\']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST[\'email\']), FILTER_SANITIZE_EMAIL);
        
        // Простая валидация полей
        if (empty($username) || empty($phone) || empty($email)) {
            echo json_encode([\'success\' => false, \'message\' => \'Пожалуйста, заполните все поля.\']);
            exit;
        }

        // Формируем текст письма
        $message = "<h3>Новая заявка с тестового сайта Гротеск</h3>";
        $message .= "<p><strong>Имя:</strong> {$username}</p>";
        $message .= "<p><strong>Телефон:</strong> {$phone}</p>";
        $message .= "<p><strong>Email:</strong> {$email}</p>";

        // Отправка письма средствами MODX API
        $modx->getService(\'mail\', \'mail.modPHPMailer\');
        $modx->mail->set(modMail::PROP_BODYS, $message);
        $modx->mail->set(modMail::PROP_FROM, $modx->getOption(\'emailsender\'));
        $modx->mail->set(modMail::PROP_FROM_NAME, \'Тестовый Лендинг\');
        $modx->mail->set(modMail::PROP_SUBJECT, \'Заявка на стажировку\');
        
        // Укажите почту, куда должны приходить заявки
        $modx->mail->address(\'to\', \'your-email@example.com\'); 
        
        $modx->mail->setHTML(true);

        if ($modx->mail->send()) {
            $modx->mail->reset();
            echo json_encode([\'success\' => true]);
        } else {
            echo json_encode([\'success\' => false, \'message\' => \'Ошибка при отправке письма внутренним сервером.\']);
        }
        
        exit; // Останавливаем дальнейший парсинг страницы MODX
    }
}
return \'\';
return;
';