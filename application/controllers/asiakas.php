<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {



    function __construct() {
        parent::__construct();
        $this->load->model('Asiakas_model');
    }

	public function naytaAsiakas() {
		
		$data['asiakkaat']= $this->Asiakas_model->getAsiakas();

		$data['sivun_sisalto']="asiakas/naytaAsiakas";
			$this->load->view('menu/valikko', $data);
	}

	public function lisaaAsiakas() {
		$btn=$this->input->post('btn');
		//jos painiketta painettu
		if(isset($btn)) {
			$lisaa_data=array(
				"etunimi"=>$btn=$this->input->post('en'),
				"sukunimi"=>$btn=$this->input->post('sn'),
				"email"=>$btn=$this->input->post('email')
				);
			$testi=$this->Asiakas_model->addAsiakas($lisaa_data);
			if($testi>0) {
				echo '<script>alert("Lisäys onnistui!")</script>';
			}
		}

		$data['sivun_sisalto']="asiakas/lisaaAsiakas";
		$this->load->view('menu/valikko', $data);
	}


}
