<?php

class peminjaman
{
    public $book;
    public $member;
    public $tanggalpinjam;

    public function getInfo()
    {
        return "Nama Buku: " . $this->book->namabuku . ", Nama Member: " . $this->member->nama . ", Tanggal Pinjam: " . $this->tanggalpinjam;
    }
}
