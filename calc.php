   <?php
   
      if (isset($_POST['submit'])) {
        $num1 = 0;
        $num2 = 0;
        $operator = "";

        if ($_POST['num1'] != "" && $_POST['num2'] != "" && $_POST['operator'] != "") {
          $num1 = (int)$_POST['num1'];
          $num2 = (int)$_POST['num2'];
          $operator = trim($_POST['operator']);

           $result;
          switch($operator) {
            case '+':
              $result = $num1 + $num2; break;
            case '-':
              $result = $num1 - $num2; break;
            case '*':
              $result = $num1 * $num2; break;
            case '/':
              if ($num2 != 0) {
                $result = $num1 / $num2;
              }
              else {
                echo 'На ноль делить нельзя!';
                $result = null;
              }
              break;
  
            default: echo 'Вы выбрали неверную операцию!'; $result = null; break;
          }
  
          if (isset($result)) {
            echo "Результат: $num1 $operator $num2 = $result";
          }  

        } 
        
        else {
          echo 'Заполните все поля!';
        }
       
      }
   
   ?>
   
   
    <!-- Область основного контента -->
    <form action='' method='POST'>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' value="<?= $num1 ?>"/>
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' value="<?= $operator ?>"/>
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' value="<?= $num2 ?>"/>
      <br />
      <br />
      <input type='submit' value='Считать' name='submit'>
    </form>
    <!-- Область основного контента -->
