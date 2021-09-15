<?php

class Kendaraan
{
    private $warna = "Putih"; // nilai default
    private $mesin = 1000; // nilai default

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    public function getWarna()
    {
        return $this->warna;
    }
    public function setMesin($mesin)
    {
        $this->mesin = $mesin;
    }
    public function getMesin()
    {
        return $this->mesin;
    }
}

class Mobil extends Kendaraan
{
    private $temprature = 0;

    public function __construct()
    {
        /* code */
    }

    public function setTemprature($temprature)
    {
        $this->temprature = $temprature;
    }

    public function getTemprature()
    {
        return $this->temprature;
    }
}

class Motor extends Kendaraan
{
    private $bagasiHelm = 0;

    public function setBagasiHelm($bagasiHelm)
    {
        $this->bagasiHelm = $bagasiHelm;
    }

    public function getBagasiHelm()
    {
        return $this->bagasiHelm;
    }
}

$mobil = new Mobil();
$mobil->setWarna("Hitam"); // ganti nilai
$mobil->setMesin(3000); // ganti nilai
$mobil->setTemprature(15); // ganti nilai

echo "Mobil berwarna " . $mobil->getWarna() . " dengan mesin " . $mobil->getMesin() . " yang memiliki temprature " . $mobil->getTemprature();

$motor = new Motor();
$motor->setWarna("Pink");
$motor->setMesin(150);
$motor->setBagasiHelm(2);

echo "<br>" . "Motor berwarna " . $motor->getWarna() . " dengan mesin " . $motor->getMesin() . " yang memiliki bagasi helm " . $motor->getBagasiHelm();
