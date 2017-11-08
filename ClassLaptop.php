<?php

class Laptop extends Elektronik implements kegunaan,milik{
	public $ar;
	public function tegangan($th){
		return "Tegangan Yaitu $th "; //dari abstract
	}
	public function arus(){
		return "Arus $this->ar Ma";   //dari abstract
	}

	public function kepemilikan($cros){
		return "Milik $cros";			//dari interface
	}
	public function belajar(){
		return "Digunakan untuk Belajar Laptop"; 	//dari interface
	}
}
?>