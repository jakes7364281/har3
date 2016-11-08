<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {

	public function index() {
		echo 'indexuuuu';
	}

	public function eka() {
		echo 'Tama olla Testi-Contrillerin eka-funktio';
	}
	public function toka() {
		$nimi="Jussi";
		$nimet=array(
			array("en"=>'Jussi',"sn"=>'virta'),
			array("en"=>'Jussi',"sn"=>'virtanen'),
			array("en"=>'Liisa',"sn"=>'virta')
			);
		$data['nimi']=$nimi;
		$data['nimet']=$nimet;
		$this->load->view('testi/toka',$data);
	}
	public function kolmas(){
		$this->load->model('Testi_model');
		$data['nimet']=$this->Testi_model->getNimet();
		$this->load->view('testi/kolmas', $data);
	}
}