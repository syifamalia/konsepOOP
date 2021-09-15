<?php
class Orang
{
    public $nama = "Zeus";
    public $umur = 1; // nilai default umur

    function setUmur($parameterUmur)
    {
        if ($parameterUmur < 13) {
            throw new Exception("Umur harus diatas 13 tahun"); // jika umurnya dibawah 13 tahun
        }
        $this->umur = $parameterUmur;
    }

    function getUmur()
    {
        return $this->umur;
    }
}
// instance ke-1
$orang = new Orang();
$orang->setUmur(15);
echo $orang->getUmur();

// echo $orang->umur;

// instance ke-2
$orang2 = new Orang();
$orang2->setUmur(20);
echo "<br>" . $orang2->getUmur();

// instance ke-3
$orang3 = new Orang();
$orang3->setUmur(10);
echo "<br>" . $orang3->getUmur();
