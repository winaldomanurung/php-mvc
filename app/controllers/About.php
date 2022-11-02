<?php

class About{
  public function index($nama = 'Aldo', $pekerjaan = 'programmer'){
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan.";
  }

  public function page(){
    echo 'About/page';
  }


}