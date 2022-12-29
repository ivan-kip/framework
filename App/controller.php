<?php

abstract class controller{
	
	function view($view, $tpl = false){
    	ob_start();
    	include_once sprintf("Views/%s.php", $view);
    	$content = ob_get_clean();
    	if($tpl) include_once sprintf("Views/%s.php", $this->tpl);
    	else echo $content;
    }
}