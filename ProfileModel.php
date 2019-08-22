<?php

class profile extends Model {
    protected $dbTable = "profiles";
	protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'fingerprintId' => array('text'),
        'browserId' => array('text'),
        'avatarId' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

     protected $relations = Array(
        'fingerprintId' => Array("hasOne", "fingerprint"),
        'fingerprint' => Array("hasOne", "fingerprint", "fingerprintId"),
        'browserId' => Array("hasOne", "browser"),
        'browser' => Array("hasOne", "browser", "browserId"),
        'avatarId' => => Array("hasOne", "avatar"),
        'avatar' => Array("hasOne", "avatar", "avatarId"),
    );

}