<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$login_view = $this->load->view('login', [], true);

		$this->load->view('layout', [
			'page' => $login_view
		]);
	}

	public function submit()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		// match with db .. if found go to dashboard, else load login with error
		if (isset($_POST['email'])) {
			$user = $this->UserModel->verifyLogin($email, $password);

			if ($user) {
				$_SESSION['email'] = $user['email'];
				redirect('dashboard');
			} else {
				$data = [
					'success' => 0,
					'msg' => 'Invalid login'
				];
			}
		}

		$login_view = $this->load->view('login', $data, true);

		$this->load->view('layout', [
			'page' => $login_view
		]);
	}

	public function logout()
	{
		unset($_SESSION['email']);
		redirect('login');
	}
}
