<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Peoples';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Load model
        $this->load->model('Peoples_model', 'peoples');

        // Load library
        $this->load->library('pagination');
        
        // Ambil data pencarian
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // Konfigurasi pagination
        $config['base_url'] = 'http://localhost:8081/maritim/maritimmuda-home/peoples/index';
        $this->db->like('name', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;
        
        // Inisialisasi pagination
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        // Load views
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function update()
    {
        $old_name = $this->input->post('old_name'); 
        $new_name = $this->input->post('new_name');
        $new_position = $this->input->post('new_position'); 

        $this->load->model('Peoples_model'); 
        $this->Peoples_model->updatePeople($old_name, $new_name, $new_position); 

        redirect('peoples');
    }
}
