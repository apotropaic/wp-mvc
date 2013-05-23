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


  public function __get($name)
  {
    return $this->controller->$name;
  }


  /**
   * Attempt to check to see if the called method is a method on the controller.
   * The way that wpmvc calls into the renderer means that the controller is no longer
   * the main object.
   * $this->do_something($args);
   * $this->form->create($args);
   *
   * @return void
   * @author 
   **/
  public function __call($method, $args)
  {
    try
    {
      $res = call_user_func_array(array($this->controller, $method), $args);
    }
    catch(Exception $e)
    {
      $res = parent::__call($method, $args);
    }

    return $res;
  }

}