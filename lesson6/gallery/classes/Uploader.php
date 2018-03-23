<?php

class Uploader
{
    public function __construct($picture)
    {
        if ($this->isUploaded() != null) {
            $this->upload();
        }
    }

    function isUploaded()
    {
        if (isset($picture)) {
            return $picture;
        }
        return null;
    }

    function upload()
    {
        move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__ . '/../images/' . $_FILES['picture']['name']);
    }
}