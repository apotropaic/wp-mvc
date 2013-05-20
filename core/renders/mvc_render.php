<?php
/**
*	
*	Base class for rendering engines
*	
**/

class MvcRender {

  public $controller;

  /**
   * We need to be able to access much of what the controller has
   * to offer to us, but since we are rendering through a render class,
   * we will need to pass the controller in.  Access in views via $this->controller;
   *
   * @return void
   * @author 
   **/
  public function __construct($controller)
  {
    $this->controller = $controller;
  }

}