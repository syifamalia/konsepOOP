<?php
interface ProsesDatabase
{
    public function simpan($pesan);
}

// class DbMysql - ini tanpa interface
class DbMysql implements ProsesDatabase
{
    public function simpan($pesan)
    {
        return "Data berhasil disimpan ke database Mysql : " . $pesan;
    }
}

class DbMongo implements ProsesDatabase
{
    public function simpan($pesan)
    {
        return "Data berhasil disimpan ke database Mongo : " . $pesan;
    }
}

class Konten
{
    protected $prosesDatabase;

    // public function __construct(DbMysql $prosesDatabase) - tanpa interface
    // dengan interface. dengan menuliskan ProsesDatabase maka $prosesDatabase akan menggunakan interface tsb. Dan interface tsb bisa memilih berdasarkan apa yang dimasukan ke dalam instance
    public function __construct(ProsesDatabase $prosesDatabase)
    { // menggunakan class DbMysql
        $this->prosesDatabase = $prosesDatabase;
    }

    public function kontenBaru()
    {
        $konten = "Simpan konten baru";
        return $this->prosesDatabase->simpan($konten);
    }
}

// membuat instance
$konten = new Konten(new DbMongo);
echo $konten->kontenBaru();
