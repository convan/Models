<?php

class post extends Model {
    protected $dbTable = "posts";
	protected $jsonFields = Array('custom_fields', 'toolset_fields', 'review', 'settings', 'taxonomy', 'term', 'review', 'settings');
	protected $timestamps = Array ('createdAt', 'updatedAt', 'publishedAt');
	protected $dbFields = array(
        'wpId' => array('int'),
        'title' => array('text', 'required'),
        'body' => array('int'),
        'taxonomy' => array('text'),
        'term' => array('text'),
        'custom_fields' => array('text'),
        'toolset_fields' => array('text'),
        'review' => array('text'),
        'excerpt' => array('text'),
        'settings' => array('text'),
        'url' => array('text'),
        'slug' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

     protected $relations = Array(
        'body' => Array("hasOne", "data"),
    );

     public function getBody() {
        return $this->body->value;
     }
}