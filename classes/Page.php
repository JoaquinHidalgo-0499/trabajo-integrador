<?php

namespace Classes;

class Page
{
    protected static $db;
    public $id_page;
    public $title_page;
    public $content_page;
    public $created_at;

    public static function setDB($database)
    {
        self::$db = $database;
    }
    public function __construct($args = [])
    {
        $this->id_page = $args['id'] ?? '';
        $this->title_page = $args['titulo'] ?? '';
        $this->content_page = $args['content'] ?? '';
        $this->created_at = $args['created_at'] ?? '';
    }
}
