<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
			"deck_count" => array(
			    "3" => 4,
				"4" => 4,
				"5" => 4,
				"6" => 4,
				"7" => 4,
				"8" => 4,
				"9" => 4,
				"10" => 4,
				"J" => 4,
				"Q" => 4,
				"K" => 4,
				"A" => 4,
				"2" => 4
				)
		);
		$this->load->view('deck', $data);
	}
}
