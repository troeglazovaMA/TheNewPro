<html lang="ru">

<head>
<meta name="form" content="text/html: charset=utf-8">
<link rel="stylesheet" href="style.css">





  <link rel="stylesheet" 

href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>Задание 4</title>
   <style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
.error {
  border: 2px solid red;
}
    </style>

</head>

<body class="bg-warning">
 <?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}?>

  <div class="container-fluid">

    <div class="row  justify-content-center d-flex ">

      <div class="col-sm-4  p-0 mx-auto text-center totext">

                  

            <h2 class="" id="forma">Форма</h2>
<form action="" method="POST">
 <label> Ваше имя:<br/>
  <input   name="fio" <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print 

$values['fio']; ?>"  placeholder="Name"/><br/>
  <?php if (!empty($messages['fio'])){print ($messages['fio']);}?>
  </label>
   <label>
  Ваша почта:<br/>
  <input name="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print 

$values['email']; ?>" placeholder="Name@ex.com"/><br />
  <?php if (!empty($messages['email'])){print ($messages['email']);}?>
  </label>
  <label>
  Год:
 <input name="year" <?php if ($errors['year']) {print 'class="year"';} ?> value="<?php print 

$values['year']; ?>" type="date" min="1900-01-01" max="2020-01-01">
 <?php if (!empty($messages['year'])){print ($messages['year']);}?>
   
  <br/>
   </label>
   <label>
        Биография:<br/>
        <textarea name="fieldname" <?php if ($errors['fieldname']) {print 'class="error"';} ?> ><?

php print $values['fieldname']; ?></textarea>
      <?php if (!empty($messages['fieldname'])){print ($messages['fieldname']);}?>
      <br/>
      </label>
   <label>
      Способности:<br/>
       <select class="my-3" name="abilities[]" multiple > 
   <option value="1" selected="selected">БОГ</option>
   <option value="2" >Левитация</option>
   <option value="3" >Прохождение сквозь стены</option>
    <option value="4" >Мыслеречь</option>
     <option value="5" >Сон</option>
     <value="<?php print $values['abilities'];?>">
  </select>
 
  
      
      <br />
 </label>
   <label>
  Пол:<br/>
  <label><input type="radio"  name="radiogroup1" <?php if($errors ['radiogroup1']){print 

'class="error"';}?> checked="<?php if($values['radiogroup1']=='Male'){print 'checked';}?

>"value="Male" />Male</label>
    <label><input type="radio"  name="radiogroup1" <?php if($errors ['radiogroup1']){print 

'class="error"';}?> checked="<?php if($values['radiogroup1']=='Fema'){print 'checked';}?

>"value="Fema" />FeMale</label>
       <label><input type="radio"  name="radiogroup1" <?php if($errors ['radiogroup1']){print 

'class="error"';}?> checked="<?php if($values['radiogroup1']=='Othe'){print 'checked';}?

>"value="Othe" />Other</label>
        <?php if (!empty($messages['radiogroup1'])){print ($messages['radiogroup1']);}?>
    </label>
    </br>
   <label>
   
      Конечности: <br/>
      <label><input type="radio"  name="radiogroup2" <?php if($errors ['radiogroup2']){print 

'class="error"';}?> checked="<?php if($values['radiogroup2']=='1'){print 'checked';}?>"value="1" 

/>1</label>
      <label><input type="radio"  name="radiogroup2" <?php if($errors ['radiogroup2']){print 

'class="error"';}?> checked="<?php if($values['radiogroup2']=='3'){print 'checked';}?>"value="3" 

/>3</label>
      <label><input type="radio"  name="radiogroup2" <?php if($errors ['radiogroup2']){print 

'class="error"';}?> checked="<?php if($values['radiogroup2']=='6'){print 'checked';}?>"value="6" 

/>6</label>
      <label><input type="radio"  name="radiogroup2" <?php if($errors ['radiogroup2']){print 

'class="error"';}?> checked="<?php if($values['radiogroup2']=='10'){print 'checked';}?>"value="10" 

/>1</label>
      
        <br />
        <?php if (!empty($messages['radiogroup2'])){print ($messages['radiogroup2']);}?>
  </label>
   </br>
      <label>
      <input type="checkbox" name="checks" <?php if ($errors['checks']) {print 'class="error"';} ?> 

id="checks" checked="<?php print $values['checks']; ?>" />Cjukfcty!</label><br />
      <?php if (!empty($messages['checks'])){print ($messages['checks']);}?>
  <input type="submit" value="save" />
</form>
           </div>

      </div>
  </div>

      
</body>

</html>
