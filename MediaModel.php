<?php

class articlepost extends Model {
    protected $dbTable = "articles_posts";
	protected $timestamps = Array ('createdAt', 'updatedAt');
	protected $dbFields = array(
        'postId' => array('text'),
        'mediaId' => array('text'),
        'articleId' => array('text'),
        'resourceId' => array('text'),
		'createdAt' => array('text'),
		'updatedAt' => array('text')
    );

     protected $relations = Array(
        'articleId' => Array("hasOne", "article"),
        'article' => Array("hasOne", "article", "articleId");
        'postId' => Array("hasOne", "post"),
        'post' => Array("hasOne", "post", "postId");
        'mediaId' => Array("hasOne", "media"),
        'media' => Array("hasOne", "media", "mediaId");
        'resourceId' => Array("hasOne", "resource"),
        'resource' => Array("hasOne", "resource", "resourceId");

    );

}