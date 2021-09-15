<?php
class Orang
{
    public $nama = "Zeus";

    function setNama()
    {
        // kegunaan method
        return "Hera";
    }
}
$orang = new Orang();
$orang2 = new Orang();
// echo $orang->nama;
echo $orang->setNama() . "<br>";
echo $orang2->nama . "<br>";
