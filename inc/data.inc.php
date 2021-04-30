<?php

/*
  * Получаем текущий час в виде строки от 00 до 23
  * и приводим строку к целому числу от 0 до 23
  */
  $hour = (int) strftime('%H');
  $welcome = ''; // Инициализируем переменную для приветствия

  if (0 <= $hour && $hour < 6) {
    $welcome = 'Доброй ночи';
  }
  else if (6 <= $hour && $hour < 12) {
    $welcome = 'Доброе утро';
  }
  else if (12 <= $hour && $hour < 18) {
    $welcome = 'Добрый день';
  }
  else if (18 <= $hour && $hour < 23) {
    $welcome = 'Добрый вечер';
  }
  else {
    $welcome = 'Доброй ночи';
  }


  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%m');
  $year = strftime('%Y');

  // не получалось вывести кириллицу
  $transform = array(
    "01" => "Январь",
    "02" => "Февраль",
    "03" => "Март",
    "04" => "Апрель",
    "05" => "Май",
    "06" => "Июнь",
    "07" => "Июль",
    "08" => "Август",
    "09" => "Сентябрь",
    "10" => "Октябрь",
    "11" => "Ноябрь",
    "12" => "Декабрь");

  $month  = strtr($mon, $transform);

  // Инициализация массива

  $leftMenu = [
      ['link'=>'Домой', 'href'=>'index.php'],
      ['link'=>'О нас', 'href'=>'index.php?id=about'],
      ['link'=>'Контакты', 'href'=>'index.php?id=contact'],
      ['link'=>'Таблица умножения', 'href'=>'index.php?id=table'],
      ['link'=>'Калькулятор', 'href'=>'index.php?id=calc']
    ];
