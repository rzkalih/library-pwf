<?php

require_once 'book.php';
require_once 'member.php';
require_once 'peminjaman.php';
require_once 'digitalbook.php';

$book = new book();
$book->namabuku = "pemograman web";
$book->author = "aliriz";

$member = new member();
$member->nama = "budi";

$peminjaman = new peminjaman();
$peminjaman->book = $book;
$peminjaman->member = $member;
$peminjaman->tanggalpinjam = "1 september 2026";

$digitalbook = new digitalbook();
$digitalbook->namabuku = "pemograman web";
$digitalbook->author = "aliriz";
$digitalbook->format = "PDF";

echo $book->getInfo();
echo "<br>";
echo $member->getInfo();
echo "<br>";
echo $peminjaman->getInfo();
echo "<br>";
echo $digitalbook->getInfo();
