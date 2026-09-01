<?php

require_once 'book.php';
require_once 'member.php';
require_once 'peminjaman.php';

$book = new book();
$book->namabuku = "pemograman web";
$book->author = "aliriz";

$member = new member();
$member->nama = "budi";

$peminjaman = new peminjaman();
$peminjaman->book = $book;
$peminjaman->member = $member;
$peminjaman->tanggalpinjam = "1 september 2026";

echo $book->getInfo();
echo "<br>";
echo $member->getInfo();
echo "<br>";
echo $peminjaman->getInfo();
