<?php

class Uploader
{
    public $picture; //создаём атрибут класса Uploader - изображение

    public function __construct($picture)
    {
        $this->picture = $picture; // присваиваем атрибуту класса передаваемый аргумент
    }

    public function isUploaded() // проверяем был ли загружен файл от данного имени поля
    {
        if (isset($this->picture)) {
            return $this->picture;
        }
        return null;
    }

    public function upload() // записываем изображение в папку images с его исходным именем
    {
        if ($this->isUploaded() != null) {
            move_uploaded_file
            ($this->picture['tmp_name'], __DIR__ . '/../images/' . $this->picture['name']);
        }

    }
}