<?php

// define('NAMA', "Mahdy Khairudin");
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba
// {
//     const NAMA = "Mahdy Khairudin";
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
