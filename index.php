<?php
// подключаем файлы .php
require_once ('functions.php');
require_once ('templates/index.php');
require_once ('templates/layout.php');

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

// выводим простой массив проектов
$names_projects = ["Все", "Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
// выводим двумерный массив проектов
$projects_table = [
         [
            'task' => 'Собеседование в IT компании',
            'date' => '01.06.2018',
            'categories' => 'Работа',
            'status' => false
        ],
          [
            'task' => 'Выполнить тестовое задание',
            'date' => '25.05.2018',
            'categories' => 'Работа',
            'status' => false
        ],
          [
            'task' => 'Сделать задание первого раздела',
            'date' => '21.04.2018',
            'categories' => 'Учеба',
            'status' => true
        ],
          [
            'task' => 'Встреча с другом',
            'date' => '22.04.2018',
            'categories' => 'Входящие',
            'status' => false
        ],
          [
            'task' => 'Купить корм для кота',
            'date' => 'Нет',
            'categories' => 'Домашние дела',
            'status' => false
        ],
          [
            'task' => 'Заказать пиццу',
            'date' => 'Нет',
            'categories' => 'Домашние дела',
            'status' => false
        ],
];

// Выводим функцию подсчета задач
function count_tasks($tasks, $category)
{
    $amount = 0;
  
  if ($category == 'Все') {
     return count($tasks);
  }
  
  foreach ($tasks as $v) {
    if ($v['categories'] == $category) {
     $amount++;
    }
  } 
    return $amount;
}

?>

<?php 
$layout = get_template('templates/layout.php', $names_projects = array());

print($layout);

?>


