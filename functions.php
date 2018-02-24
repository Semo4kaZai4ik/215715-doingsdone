<?php 
//функция шаблонизатор
function get_template($template, $massiv) {
	if (file_exists($template) == true) {
		ob_start();
		extract ($massiv);
		require $template;
	  
		return ob_get_clean();
	}
	elseif (file_exists($template) == false) {
		require_once ("error.php");
	}
	
}

//функция фильтрации данных
function esc($str) {
	//$text = htmlspecialchars($str);
	$text = strip_tags($str);

	return $text;
}

//Подсчет оставшегося времени до выполнения задачи
function time_left($date) {
	date_default_timezone_set("Etc/GMT+7");
	
	$task_date = strtotime($date);
	$cur_date = time();
	$a = $task_date - $cur_date;
  $b = $a / 86400;
  $result = floor($b);

	return $result;
}

// Выводим функцию подсчета задач
function count_tasks($tasks, $category) {
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

// Вернуть массив только с теми задачами, которые для данного проекта
function select_tasks($tasks, $project)
{
  $selected = []; // Сюда будем добавлять нужные задачи
  
  // Пройдемся по всем задачам
  foreach ($tasks as $task) {
    if ($task['categories'] == $project) { // Если задача для данного проекта
    	$selected[] = $task; // Добавим её в массив отобранных
    }
  }
  
  return $selected; // Вернем отобранные задачи
}