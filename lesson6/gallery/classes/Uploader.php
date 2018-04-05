<?php

class Uploader
{
    protected $formName;
    public $file;

    public function __construct($formName)
    {
        $this->formName = $formName;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->formName])) {
            return $this->file = $_FILES[$this->formName];
        }
        return null;
    }

    public function upload()
    {
        if ($this->isUploaded() != null) {
            if (0 == $this->file['error']) {
                $mimeTypes = ['image/jpeg', 'image/png'];
                if (true == in_array($this->file['type'], $mimeTypes)) {
                    return move_uploaded_file
                    ($this->file['tmp_name'], __DIR__ . '/../images/' . $this->file['name']);
                }
            }
        } return false;
    }
}
