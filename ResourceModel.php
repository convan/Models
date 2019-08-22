<?php

class resource extends Model {
    protected $dbTable = "resources";
	protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'domain' => array('text', 'required'),
        'accountId' => array('int'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

     protected $relations = Array(
        'accountId' => Array("hasOne", "account"),
        'account' => Array("hasOne", "account", "accountId")
    );

}