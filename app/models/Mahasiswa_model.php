<?php

class Mahasiswa_model
{
  private $mhs = [
    [
      "nama" => "Winaldo Manurung",
      "nrp" => "043040023",
      "email" => "winaldo_manurung@gmail.com",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama" => "Tito Sinaga",
      "nrp" => "092474523",
      "email" => "titosinaga@unpas.ac.id",
      "jurusan" => "Teknik Mesin"
    ],
    [
      "nama" => "Sandhika Galih",
      "nrp" => "040023430",
      "email" => "sandhikagalih@unpas.ac.id",
      "jurusan" => "Teknik Informatika"
    ],
  ];

  public function getAllMahasiswa()
  {
    return $this->mhs;
  }
}
