<?php

class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Winaldo Manurung",
  //     "nrp" => "043040023",
  //     "email" => "winaldo_manurung@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Tito Sinaga",
  //     "nrp" => "092474523",
  //     "email" => "titosinaga@unpas.ac.id",
  //     "jurusan" => "Teknik Mesin"
  //   ],
  //   [
  //     "nama" => "Sandhika Galih",
  //     "nrp" => "040023430",
  //     "email" => "sandhikagalih@unpas.ac.id",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  // ];

  private $dbh; //database handler
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=127.0.0.1:3310;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }


  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
