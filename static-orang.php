<?php

class Orang
{
    public static $umur = 5;
    const nama = "Daniel";

    public function tambahUmur($umur)
    {
        static::$umur += $umur;
    }
}

$zeus = new Orang();
$zeus->tambahUmur(10);
$zeus->tambahUmur(10);
// hasilnya jadi 25

$tom = new Orang();
$tom->tambahUmur(10);
// hasilnya jadi 35 karna methodnya diulang 3 kali.

// echo Orang::$umur;
echo Orang::nama . " berumur " . Orang::$umur;
