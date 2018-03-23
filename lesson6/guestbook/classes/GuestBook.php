<?php
require __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    protected $comment;

    public function append($text)
    {
        $this->content[] = $text;
        $this->comment = $text;
        return $this;
    }


    public function save()
    {
        file_put_contents($this->path, $this->comment . "\n", FILE_APPEND);
        return $this;
    }
}
