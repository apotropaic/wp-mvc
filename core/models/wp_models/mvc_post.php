<?php

class MvcPost extends MvcModel {

	var $table = '{prefix}posts';
	var $primary_key = 'ID';
	var $order = 'post_date DESC';
	var $display_field = 'post_title';
	var $has_many = array(
		'Comment' => array(
			'class' => 'MvcComment',
			'foreign_key' => 'comment_post_ID'
		),
		'Meta' => array(
			'class' => 'MvcPostMeta',
			'foreign_key' => 'post_id'
		)
	);

  /**
   * Let's just display the published items on the front-end.  This can be overriden
   * in the admin.
   *
   * @return void
   * @author 
   **/
	public function __construct()
  {
    $this->conditions = array_merge(array(
      "post_status" => "publish",
      "post_date <=" => date( "Y-m-d H:i:s" )
    ), $this->conditions);

    parent::__construct();
  }
	
}