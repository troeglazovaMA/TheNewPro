﻿<html lang="ru">

<head>
 
  <link rel="stylesheet" href="style.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>Задание 3</title>

</head>
<body class="bg-warning">
 
  <div class="container-fluid">

    <div class="row  justify-content-center d-flex ">

      <div class="col-sm-5  p-0 mx-auto totext">

                  

            <h2 class="" id="forma">Форма</h2>

            <form action="" method="POST" >

              <label>
                Ваше имя

                <br>

                <input name="field-name-1" value="Введите имя">

              </label>

              <br>

              <label>

                Ваш email:

                <br>

                <input name="field-email" value="test@example.com" type="email">

              </label>

              <br>

              <label>

                Дата рождения:

                <br>

                <input type="date">

              </label>

              <br>

              <label>

                Биография:

                <br>

                <textarea id="bio">Ваш текст</textarea>

              </label>

              <br>

              <label>

                Сверхспособности:

                <br>

                <select name="spos" multiple="multiple">

                  <option value="Способность1">Бессмертие</option>

                  <option value="Способность2" selected="selected">Левитация</option>

                  <option value="Способность3" selected="selected">Прохождение сквозь стены</option>

                </select>

              </label>

              <br>

              <label>

                Количество конечностей:

                <br>

 		<label>
               <input type="radio" checked="checked" name="radio-group-1" value="Konechnost1">

                  1

              </label>

              <label>

                <input type="radio" checked="checked" name="radio-group-1" value="Konechnost10">

                  10

              </label>

              <label>

                <input type="radio" name="radio-group-1" value="Konechost2">

                  2

              </label>

	     </label>

              <br>

              <label>

                Пол:

                <br>

                <input type="radio" checked="checked" name="radio-group-2" value="1">

                  Мужской

              </label>

              <label>

                <input type="radio" checked="checked" name="radio-group-2" value="2">

                  Женский

              </label>

              <label>

                <input type="radio" name="radio-group-2" value="3">

                  Другое

              </label>

              <br>

              <label>

                <input type="checkbox" checked="checked" name="check-1">

                  С контрактом ознакомлен

              </label>

              <br>


              Отправить?

              <input type="submit" value="Отправить">

            </form>

                  </div>

      </div>
  </div>

      
</body>

</html>