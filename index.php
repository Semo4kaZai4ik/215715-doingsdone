<?php
// подключаем файлы .php
require_once ('functions.php');
require_once ('data.php');

$layout = get_template('templates/layout.php', [
  'names_projects' => $names_projects,
  'projects_table' => $projects_table,
  'title' => 'Дела в порядке',
  'show_complete_tasks' => $show_complete_tasks
]);

print($layout);

?>
