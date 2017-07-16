<?php

namespace ReadTime;

class Calculate
{
    protected $text;

    protected $wordCount;

    public function __construct($text)
    {
        $this->text = strip_tags($text);
        $this->wordCount = str_word_count($this->text);
    }

    public function inSeconds()
    {
        return floor($this->wordCount % 200 / (200 / 60));
    }

    public function inMinutes()
    {
        return $this->wordCount / 200;
    }

}