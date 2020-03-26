<?php
header('Content-Type: text/html; charset=UTF-8');



if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!empty($_GET['save'])) {
        
        print('Мы все забрали себе....');
    }
    
    include('form.php');
  
    exit();
}

$errors = FALSE;
if (empty($_POST['fio'])) {
    print('Введите имя.<br/>');
    $errors = TRUE;
}

if (empty($_POST['email'])) {
    print('Заполните email.<br/>');
    $errors = TRUE;
}

if (empty($_POST['year'])) {
    print('Выберите год.<br/>');
    $errors = TRUE;
}
if (empty($_POST['fieldname'])) {
    print('Напишите биографию.<br/>');
    $errors = TRUE;
}

if (empty($_POST['abilities'])) {
    print('Выберите способности.<br/>');
    $errors = TRUE;
}


$abilities = serialize($_POST['abilities']);



if (empty($_POST['checks'])) {
    print('Согласны?.<br/>');
    $errors = TRUE;
}


if ($errors) {
   
    exit();
}



$user = 'u20397';
$pass = '5245721';
$db = new PDO('mysql:host=localhost;dbname=u20397', $user, $pass, array(PDO::ATTR_PERSISTENT => true));


try {
    $stmt = $db->prepare("INSERT INTO application  SET name = ?, email = ?, year = ? ,fieldname = ? , abilities = ?, radiogroup1 = ?, radiogroup2 = ? , checks= ?  ");
    $stmt -> execute(array($_POST['fio'], $_POST['email'], $_POST['year'], $_POST['fieldname'], $abilities, $_POST['radiogroup1'], $_POST['radiogroup2'], $_POST['checks']));
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}


header('Location: ?save=1');
