<html lang="ru">

<head>
<meta name="form" content="text/html: charset=utf-8">
<link rel="stylesheet" href="style.css">





  <link rel="stylesheet" 

href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>Задание 3</title>

</head>
<body class="bg-warning">
 
  <div class="container-fluid">

    <div class="row  justify-content-center d-flex ">

      <div class="col-sm-4  p-0 mx-auto text-center totext">

                  

            <h2 class="" id="forma">Форма</h2>
<form action="" method="POST">
  Ваше имя:<br/>
  <input class="mb-3" name="fio" /><br/>
  Ваша почта:<br/>
  <input name="email" /><br />
  Год:<select class="my-3" name="year"> 
  <?php  for ($i=1900;$i<2020;$i++) {?>
  <option value="<?php print($i);?>"><?php print($i);?></option>
  <?php } ?>
   </select>
  <br/>
        Биография:<br/>
        <textarea name="fieldname">Bio-bio-bio</textarea>
      <br/>
      Способности:<br/>
       <select class="my-3" name="abilities[]" multiple> 
   <option value="1" selected="selected">БОГ</option>
   <option value="2" >Левитация</option>
   <option value="3" >Прохождение сквозь стены</option>
    <option value="4" >Мыслеречь</option>
     <option value="5" >Сон</option>
  </select>
  
  
      
      <br />
 
  Пол:<br/>
      <label><input type="radio" checked="checked"
        name="radiogroup1" value="Male" />
        Male</label>
        <label><input type="radio" checked="checked"
        name="radiogroup1" value="Fem" />
        FeMale</label>
      <label><input type="radio"
        name="radiogroup1" value="3" />
        Other</label><br />
        
        
    
      Конечности: <br/>
      <label><input type="radio" checked="checked"
        name="radiogroup2" value="One" />
        1</label>
      <label><input type="radio"
        name="radiogroup2" value="Two" />
        2</label>
        <label><input type="radio"
        name="radiogroup2" value="six" />
        6</label>
        <label><input type="radio"
        name="radiogroup2" value="Ten" />
        10</label>
        <br />
        
  
      <label><input type="checkbox" checked="checked"
        name="checks" value="checked" />
         Cjukfcty!</label><br />
  <input type="submit" value="save" />
</form>
           </div>

      </div>
  </div>

      
</body>

</html>
