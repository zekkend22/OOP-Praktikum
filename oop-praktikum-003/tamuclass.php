<?php
class Fakultas {
    public string $nama;
    public function  construct(string $a) {
       $this ->nama = $a;
    }
}
class prodi{
    public static function setNama(string $b) {
        return $b;
    }
}
class Mahasiswa {
    public static function getFakultas() {
       $fak = new Fakultas("FST");
        return $fak ->nama;
    }
    public static function getProdi() {
        return Prodi::setNama("Sistem Informasi");
    }
}
// $fak = new Fakultas("FST");
// echo $fak->nama;
// echo Prodi::setNama("Sistem Informasi");
echo Mahasiswa::getFakultas() . " " 
. Mahasiswa::getProdi();