<?php
class Mahasiswa {
    public static function setNama(string $nama) {
    return $nama;
    }
}
// Instantiation with Scope resolution operator
// Paamayim Nekudotayim

echo Mahasiswa::setNama('Faiza');
