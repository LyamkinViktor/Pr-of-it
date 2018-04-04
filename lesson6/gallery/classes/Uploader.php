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
            if (0 == $this->picture['error']) {
                $mimeTypes = ['image/jpeg', 'image/png'];
                if (true == in_array($this->picture['type'], $mimeTypes)) {
                    return move_uploaded_file
                    ($this->picture['tmp_name'], __DIR__ . '/../images/' . $this->picture['name']);
                }
            }
        } return false;
    }
}
