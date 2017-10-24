<?php

class motor
{
	public $warna,$merk,$thn;

	public function __construct($warna,$merk,$thn)
	{
		$this->warna=$warna;
		$this->merk=$merk;
		$this->thn=$thn;

	}
	public function get_warna(){
		return $this->warna;
	}
		public function get_merk(){
		return $this->merk;
	}
	public function get_thn(){
		return $this->thn;
	}

}
?>