<?php
header('Content-Type: text/html; charset=UTF-8');



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $messages = array();
    if (!empty($_COOKIE['save'])) {
        setcookie('save', '', 10);
        $messages[] = 'MWAAAHAHAHAHAHAH.';
    }


$errors = array();
$errors['fio'] = !empty($_COOKIE['fio_error']);
$errors['email'] = !empty($_COOKIE['email_error']);
$errors['year'] = !empty($_COOKIE['year_error']);
$errors['fieldname'] = !empty($_COOKIE['fieldname_error']);
$errors['sverh'] = !empty($_COOKIE['sverh_error']);
$errors['checks'] = !empty($_COOKIE['checks_error']);
$errors['radiogroup1'] = !empty($_COOKIE['radiogroup1_error']);
$errors['radiogroup2'] = !empty($_COOKIE['radiogroup2_error']);


// TODO: аналогично все поля.


if ($errors['fio']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('fio_error', '', 1);
    // Выводим сообщение.
    $messages[] = '<div class="error">Please input name.</div>';
}
if ($errors['email']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('email_error', '', 1);
    // Выводим сообщение.
    $messages[] = '<div class="error">please input email.</div>';
}
if ($errors['radiogroup1']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('radiogroup1_error', '', 1);
    // Выводим сообщение.
    $messages[] = '<div class="error">what?.</div>';
}
if ($errors['radiogroup2']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('radiogroup2_error', '', 1);
    // Выводим сообщение.
    $messages[] = '<div class="error">WHAAAAT?.</div>';
}

if ($errors['year']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('year_error', '', 1);
    // Выводим сообщение.
    $messages[] = '<div class="error">not correct year.</div>';
}
if ($errors['fieldname']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('fieldname_error', '', 1);
    // Выводим сообщение.
    $messages[] = '<div class="error">input bio.</div>';}
    if ($errors['checks']) {
        // Удаляем куку, указывая время устаревания в прошлом.
        setcookie('checks_error', '', 1);
        // Выводим сообщение.
        $messages[] = '<div class="error">take soglasie.</div>';
    }

// TODO: тут выдать сообщения об ошибках в других полях.


$values = array();
$values['fio'] = empty($_COOKIE['fio_value']) ? '' : $_COOKIE['fio_value'];
$values['year'] = empty($_COOKIE['year_value']) ? '' : $_COOKIE['year_value'];
$values['radiogroup1'] = empty($_COOKIE['radiogroup1_value']) ? '' : $_COOKIE['radiogroup1_value'];
$values['radiogroup2'] = empty($_COOKIE['radiogroup2_value']) ? '' : $_COOKIE['radiogroup2_value'];
$values['email'] = empty($_COOKIE['email_value']) ? '' : $_COOKIE['email_value'];
$values['fieldname'] = empty($_COOKIE['fieldname_value']) ? '' : $_COOKIE['fieldname_value'];
$values['checks'] = empty($_COOKIE['checks_value']) ? '' : $_COOKIE['checks_value'];
// TODO: аналогично все поля.

// Включаем содержимое файла form.php.
// В нем будут доступны переменные $messages, $errors и $values для вывода
// сообщений, полей с ранее заполненными данными и признаками ошибок.
include('form.php');
}


else {
    // Проверяем ошибки.
    $errors = FALSE;
    if (empty($_POST['fio'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('fio_error', '1');
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на year.
        setcookie('fio_value', $_POST['fio'], time() + 365 * 24 * 60 * 60);
    }

    if (empty($_POST['email'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('email_error', '1');
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на year.
        setcookie('email_value', $_POST['email'], time() + 365 * 24 * 60 * 60);
    }
    if (empty($_POST['year'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('year_error', '1');
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на year.
        setcookie('year_value', $_POST['year'], time() + 365 * 24 * 60 * 60);
    }

    if (empty($_POST['radiogroup1'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('radiogroup1_error', '1');
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на year.
        setcookie('radiogroup1_value', $_POST['radiogroup1'], time() + 365 * 24 * 60 * 60);
    }
    if (empty($_POST['radiogroup2'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('radiogroup2_error', '1');
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на year.
        setcookie('radiogroup2_value', $_POST['radiogroup2'], time() + 365 * 24 * 60 * 60);
    }
    if (empty($_POST['fieldname'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('fieldname_error', '1');
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на year.
        setcookie('fieldname_value', $_POST['fieldname'], time() + 365 * 24 * 60 * 60);
    }
    if (empty($_POST['checks'])) {
        // Выдаем куку на день с флажком об ошибке в поле fio.
        setcookie('checks_error', '1');
        $errors = TRUE;
    }
    else {
        // Сохраняем ранее введенное в форму значение на year.
        setcookie('checks_value', $_POST['checks'], time() + 365 * 24 * 60 * 60);
    }
    
    
    
    
    
    if ($errors) {
        // При наличии ошибок перезагружаем страницу и завершаем работу скрипта.
        header('Location: index.php');
        exit();
    }
    else {
        // Удаляем Cookies с признаками ошибок.
        setcookie('fio_error', '', 1);
        setcookie('email_error', '', 1);
        setcookie('year_error', '', 1);
        setcookie('fieldname_error', '', 1);
        setcookie('radiogroup2_error', '',1);
        setcookie('radiogroup1_error', '',1);
        setcookie('checks_error', '', 1);
        // TODO: тут необходимо удалить остальные Cookies.
    }
        
       
    

$abilities = serialize($_POST['abilities']);

$user = 'u20397';
$pass = '5245721';
$db = new PDO('mysql:host=localhost;dbname=u20397', $user, $pass, array(PDO::ATTR_PERSISTENT => 

true));


try {
    $stmt = $db->prepare("INSERT INTO application SET name = ?, email = ?, year = ? ,fieldname = ? , 

abilities = ?, radiogroup1 = ?, radiogroup2 = ? , cheks= ?  ");
    $stmt -> execute(array($_POST['fio'], $_POST['email'], $_POST['year'], $_POST['fieldname'], 

$abilities, $_POST['radiogroup1'], $_POST['radiogroup2'], $_POST['checks']));
}

catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}
setcookie('save', '1');

header('Location: index.php');
}?>
