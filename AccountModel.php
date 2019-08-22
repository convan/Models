<?php

class account extends Model {
    protected $dbTable = "accounts";
	protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'email' => array('text'),
        'login' => array('text'),
        'password' => array('text'),
        'login_url' => array('text'),
        'phone' => array('text'),
        'profileId' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

     protected $relations = Array(
        'profileId' => Array("hasOne", "profile"),
        'profile' => Array("hasOne", "profile", "profileId")
    );

}