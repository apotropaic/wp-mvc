<?php
/**
*	
*	Mustache rendering engine
*	
**/


class MvcMustacheRender extends MvcRender {

	function render($filepath, $view_vars){
		$mustache_options = array(
			'loader' => new Mustache_Loader_FilesystemLoader(dirname($filepath))
		);

		$m = new Mustache_Engine($mustache_options);

		$tpl = $m->loadTemplate($template);
		echo $tpl->render($view_vars);

	}

}