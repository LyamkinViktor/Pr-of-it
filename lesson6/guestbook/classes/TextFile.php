<?php

class TextFile
{
    protected $path;
    protected $content;

    public function __construct($path)
    {
        $this->path = $path;
        $this->content = $this->getData();
    }

    public function getData()
    {
        if (file_exists($this->path)) {
            return file($this->path);
        }
        return null;
    }
}