<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if($_SESSION['email'] == false) {
            redirect('logout');
        }
    }

    public function index()
    {
        $data = [
            'sales' => 97.99,
            'Earning' => '$3327',
            'visitors' => 16.78,
            'orders' => 97,
            'main_latest_projects' => $this->load->view('latest_projects', ['data'=> [
                ['project' => 'Apollo', 'name' => 'Haris', 'Start Date' => '01/03/2021', 'End Date' => '01/03/2021', 'status' => 'Done', 'Assignee' => 'ronaldo'],
                ['project' => 'fireball', 'name' => 'maaz', 'Start Date' => '01/02/2021', 'End Date' => '01/03/2021', 'status' => 'in progress', 'Assignee' => 'ronaldo'],
                ['project' => 'skype', 'name' => 'waqas', 'Start Date' => '25/05/2021', 'End Date' => '01/03/2021', 'status' => 'Done', 'Assignee' => 'ronaldo'],
                ['project' => 'whatsapp', 'name' => 'abdullah', 'Start Date' => '25/05/2021', 'End Date' => '01/03/2021', 'status' => 'cancelled', 'Assignee' => 'ronaldo'],
                ['project' => 'chrome', 'name' => 'hassan', 'Start Date' => '25/05/2021', 'End Date' => '01/03/2021', 'status' => 'pending', 'Assignee' => 'ronaldo'],
                ['project' => 'instagram', 'name' => 'zain', 'Start Date' => '25/05/2021', 'End Date' => '01/03/2021', 'status' => 'Done', 'Assignee' => 'ronaldo'],
            ]], true), 
            'recent_movement_view' => $this->load->view('recent_movement', ['name' => 'haris'], true),
            'browser_usage' => $this->load->view('browser_usage', [], true),
            'calender' => $this->load->view('calender', [], true),
            'real_time' => $this->load->view('real-time', [], true),
            'monthly_sales' => $this->load->view('monthly_sales', [], true)
        ];
        
        $page = $this->load->view('dashboard', $data, true);
        
        $this->load->view('layout', ['page' => $page]);
    }

    public function profile()
    {
        $page = $this->load->view('profile', [], true);
        $this->load->view('layout', ['page' => $page]);
    }
}
