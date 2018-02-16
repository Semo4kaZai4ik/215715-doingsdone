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