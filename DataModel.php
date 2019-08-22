<?php

class data extends Model {
	protected $jsonFields = Array('value', 'synonimized');
	protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'value' => array('text', 'required'),
        'token' => array('int'),
        'do_sin' => array('bool'),
        'is_sin' => array('bool'),
        'synonimized' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

    protected $hidden = array(
        'token'
    	);
}