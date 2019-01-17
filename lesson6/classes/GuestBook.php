<?php

include __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    public $text;

    public function append($text)
    {
        $this->text = $text;
        $this->content[] = $text;
        return $this;
    }

    public function save()
    {
        $data = implode(PHP_EOL, $this->getData());
        file_put_contents($this->path, $data);
        return $this;
    }
}