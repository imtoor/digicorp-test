<?php

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function generateRandomInt($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
}

function randomMapel() {
    $arr = ["inggris", "indonesia", "jepang"];
    return $arr[rand(0, 2)];
}

class Siswa extends Nilai{

    public $nrp, $nama, $daftarNilai;
    
    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = new SplFixedArray(3);
    }
    
}

class Nilai {
    
    protected $mapel, $nilai;
    
    public function setNilai($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;        
    }
    
    public function getNilai() {
        return ["mapel" => $this->mapel, "nilai" => $this->nilai];
    }
    
 
}

$siswa = new Siswa(7162931, "Reynaldi");
$siswa->setNilai("inggris", 100);
$siswa->daftarNilai[0] = $siswa->getNilai();

$arr = [];
for($i = 0; $i <= 10; $i++) {
    $siswa = new Siswa(generateRandomInt(), generateRandomString());
    for($j = 0; $j <= 2; $j++) {
        $siswa->setNilai(randomMapel(), rand(0, 100));
        $siswa->daftarNilai[$j] = $siswa->getNilai();
    }
    $arr[] = $siswa;
}

echo "<pre>";
print_r($arr);
echo "</pre>";