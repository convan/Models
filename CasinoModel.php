<?php

class casino extends Model {
    protected $dbTable = "casinos";
    protected $jsonFields = Array('countries', 'countries_restricted', 'bonuses', 'languages', 'compability', 'currencies', 'license', 'software', 'pros', 'cons', 'rating', 'review');
	protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'name' => array('text', 'required'),
        'website' => array('text'),
        'logo' => array('text'),
        'overview' => array('text'),
        'license' => array('text'),
        'year' => array('int'),
        'countries' => array('text'),
        'countries_restricted' => array('text'),
        'languages' => array('text'),
        'bonuses' => array('text'),
        'currencies' => array('text'),
        'compability' => array('text'),
        'support' => array('text'),
        'software' => array('text'),
        'pros' => array('text'),
        'cons' => array('text'),
        'rating' => array('text'),
        'review' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

}