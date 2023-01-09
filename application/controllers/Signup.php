<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

	public function index()
	{
		$view = $this->load->view('signup', [], true);

		$this->load->view('layout', [
			'page' => $view
		]);
	}

	public function submit()
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// match with db .. if found go to dashboard, else load login with error
		if (isset($_POST['email'])) {
			
		}

		$view = $this->load->view('login', $data, true);

		$this->load->view('layout', [
			'page' => $view
		]);
	}
}
