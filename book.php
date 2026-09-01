<?php

class book
{
    public $namabuku;
    public $author;

    public function getInfo()
    {
        return "Buku: " . $this->namabuku . ", Author: " . $this->author;
    }
}
