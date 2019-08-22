<?php

class article extends Model {
    protected $dbTable = "articles";
	protected $jsonFields = Array('images');
	protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'heading' => array('text'),
        'content' => array('text', 'required'),
        'images' => array('text'),
        'source_url' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

     protected $relations = Array(
        'content' => Array("hasOne", "data"),
    );

     public function getContent() {
        return $this->content->value;
     }
}