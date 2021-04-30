<?php

function drawMenu($menu, $vertical = true) {
    if ($vertical == false) {
      foreach ($menu as $item) {
        echo "<li style='display: inline; padding: 3px;'><a href='{$item['href']}'>{$item['link']}</a></li>";
      }
    }
    else {
      foreach ($menu as $item) {
        echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
      }
    } 
}

function drawTable($cols, $rows, $color) {
    echo "<table width='400' border='2' style='margin-left: 1.2em; margin-top: 30px;'>";

      for ($i = 1; $i <= $rows; $i++ ) {
        
        echo '<tr>';
        
        for ($j = 1; $j <= $cols; $j++) {

          if ($i == 1 || $j == 1) {
            $style = "font-weight: bold; text-align: center; background: $color";
            echo "<td style='$style'>";
          }
          else {
            echo '<td>';
          }

          echo $i * $j;
          echo '</td>';
        }

        echo '</tr>';

      }

      echo '</table>';
}

