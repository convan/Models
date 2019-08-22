<?php

class casinopost extends Model {
    protected $dbTable = "casinos_posts";
    protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'casinoId' => array('int'),
        'postId' => array('int'),
        'mediaId' => array('int'),
        'resourceId' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

    protected $relations = Array(
        'casinoId' => Array("hasOne", "casino"),
        'casino' => Array("hasOne", "casino", "casinoId");
        'postId' => Array("hasOne", "post"),
        'post' => Array("hasOne", "post", "postId");
        'mediaId' => Array("hasOne", "media"),
        'media' => Array("hasOne", "media", "mediaId");
        'resourceId' => Array("hasOne", "resource"),
        'resource' => Array("hasOne", "resource", "resourceId");
    );


}