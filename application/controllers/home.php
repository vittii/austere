<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->main();
	}

	public function main()
	{
		# Set Elements
		// $nav_elements = $this->set->nav();
		// $carousel = $this->set->carousel();

		// # Get Elements
		$data['title'] = "Home";
		// $data['navigation'] = $this->get->nav($nav_elements);
		// $data['carousel'] = $this->get->carousel($carousel);

		# View
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');

	}
}	