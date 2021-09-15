<?php
class Orang
{
    public $nama = "Zeus";
    protected $umur = 1; // nilai default umur

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
$orang->umur = 20;
// $orang->setUmur(15);
echo $orang->getUmur();
