<?php

/**
*	
*	PHP variable rendering engine
*	
**/

class MvcVariableRender extends MvcRender {

	function render($filepath, $view_vars = array())
  {
		extract($view_vars);
		require $filepath;
	}

}