<?php
date_default_timezone_set('Europe/Moscow');
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['name'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    // if($_POST['email'] == "")   $errors[] = "Поле 'Ваш e-mail' не заполнено!";
    if($_POST['phone'] == "")  $errors[] = "Поле 'Ваш телефон' не заполнено";
    if($_POST['confid'] == "")   $errors[] = "Укажите ваше согласие на обработку персональных данных";
    // if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])) $errors[] = "Нe вeрный фoрмaт email!";
 
    // если форма без ошибок
    if(empty($errors)){    
        // собираем данные из формы
        $message = "Поступила заявка на обратный звонок <br>";
        $message  .= "Имя: " . $_POST['name'] . "<br>";
        $message .= "Телефон: " . $_POST['phone'] . "<br>";
        $message .= "Комментарий: ". $_POST['comment']. "<br>";
      
        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box = "Спасибо за вашу заявку! \nМы свяжемся с вами в ближайшее время";
    }else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "$one_error \n";
        }
    }
 
    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array(
        'result' => $msg_box
    ));
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "franch@detkids.com";
        // тема письма
        $subject = "Обратный звонок с сайта";
         
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: DetKids <no-reply@detkids.com>\r\n"; // от кого письмо
         
        // отправляем письмо
        mail($mail_to, $subject, $message, $headers);
    }
     
?>