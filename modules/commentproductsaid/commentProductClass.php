<?php

class commentProductClass extends ObjectModelCore
{
    public $id_comment;
    public $username;
    public $created_at;
    public $email;
    public $product_id;
    public $comment;
    public $active;

    public static $definition = array(
        'table' => 'product_comment',
        'primary' => 'id_comment',
        'multilang' => false,
        'fields' => array(
            'username' => array('type' => self::TYPE_STRING, 'required' => true),
            'created_at' => array('type' => self::TYPE_DATE, 'required' => false),
            'email' => array('type' => self::TYPE_STRING, 'required' => true),
            'product_id' => array('type' => self::TYPE_INT, 'required' => true),
            'comment' => array('type' => self::TYPE_STRING, 'required' => true),
            'active' => array('type' => self::TYPE_BOOL, 'required' => true),         
        )
    );

}