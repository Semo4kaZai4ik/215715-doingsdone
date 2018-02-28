<?php
// показывать или нет выполненные задачи
$show_complete_tasks = 1;

// выводим простой массив проектов
$names_projects = ["Все", "Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
// выводим двумерный массив проектов
$projects_table = [
         [
            'task' => 'Собеседование в IT компании',
            'date' => '01.06.2018',
            'categories' => 3,
            'status' => false
        ],
          [
            'task' => 'Выполнить тестовое задание',
            'date' => '25.05.2018',
            'categories' => 3,
            'status' => false
        ],
          [
            'task' => '<span>Сделать задание первого раздела</span>',
            'date' => '21.04.2018',
            'categories' => 2,
            'status' => true
        ],
          [
            'task' => 'Встреча с другом',
            'date' => '22.04.2018',
            'categories' => 1,
            'status' => false
        ],
          [
            'task' => 'Купить корм для кота',
            'date' => 'Нет',
            'categories' => 4,
            'status' => false
        ],
          [
            'task' => 'Заказать пиццу',
            'date' => 'Нет',
            'categories' => 4,
            'status' => false
        ],
];
