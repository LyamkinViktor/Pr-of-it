<?php

class Uploader
{
    public $formName;
    protected $file;


    public function __construct($formName)
    {
        $this->formName = $formName;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->formName])) {
            return true;
        } else {
            return false;
        }
    }

    public function upload()
    {
        if (true == $this->isUploaded()) {
            $this->file = $_FILES[$this->formName];

            if (0 == $this->file['error']) {

                $mimeTypes = ['image/jpeg', 'image/png'];

                if (true == in_array($this->file['type'], $mimeTypes)) {

                    move_uploaded_file
                    ($this->file['tmp_name'], __DIR__ . '/../gallery/img/' . $this->file['name']);

                    file_put_contents
                    (__DIR__ . '/../gallery/log.txt', $_SESSION['login'] .'@-@'. date('m.d.y')
                        .'@-@'. $this->file['name']);
                }
            }
        }
    }
}