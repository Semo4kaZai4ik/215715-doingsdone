<?php 

function get_template($template, $massiv = array()) {
	if (file_exists($template) == true) {
		ob_start();
		require '$template';
	  extract($massiv = array(), EXTR_PREFIX_ALL);
		return ob_get_clean();
	}
	else {
		exit("Ошибка");
	}
}

