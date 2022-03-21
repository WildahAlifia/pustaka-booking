<?php
class Model_latihan1 extends CI_Model
{
	//membuat variable untuk menampung nilai
	public $nilai1, $nilai2, $hasil;

	//method penjumlahan
	public function jumlah($nil1= null, $nil2 = null) 
    {
      $this->nilai1 = $nill;
      $this->nilai2 = $nil2;
      $this->hasil =$this->nil1 + $this->nil2;
      return $this->hasil;
  }
}
