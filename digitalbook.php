<?php

require_once 'book.php';

class digitalbook extends book
{
    public $format;

    public function getInfo()
    {
        return parent::getInfo() . ", Format: " . $this->format;
    }
}
