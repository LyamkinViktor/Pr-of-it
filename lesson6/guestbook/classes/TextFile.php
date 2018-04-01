<?php

class TextFile
{
    public $path;
    protected $content;

    public function __construct($path)
    {
        $this->path = $path;
        $this->content = file($path, FILE_IGNORE_NEW_LINES);
    }

    public function getData()
    {
        return $this->content;
    }

}