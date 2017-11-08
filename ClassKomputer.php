<?php


class Komputer extends Elektronik implements kegunaan{
	public $fungsi;
	public function tegangan($yh){
		return "Tegangan Yaitu $yh ";   //dari abstract
	}
	public function arus(){
		return "Arus 78 MA";	//dari abstract
	}
	public function belajar(){
		return " $this->fungsi"; 	//dari interface
	}
}
?>