<?php

class Uploader
{
    public $picture;

    public function __construct($picture)
    {
        $this->picture = $picture;
    }

    public function isUploaded()
    {
        if (isset($this->picture)) {
            return $this->picture;
        }
        return null;
    }

    public function upload()
    {
        if ($this->isUploaded() != null) {
            move_uploaded_file
            ($this->picture['tmp_name'], __DIR__ . '/../images/' . $this->picture['name']);
        }

    }
}