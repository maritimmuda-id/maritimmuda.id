<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arungisamudra extends CI_Controller
{
	protected $data = [];
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('url');
		$this->data['title'] = 'Maritim Muda Nusantara | ';
		$this->data['head_script'] = $this->load->view('arungisamudra/home_head_script', $this->data, TRUE);
		$this->data['page_css'] = $this->load->view('arungisamudra/home_css', $this->data, TRUE);
		$this->data['page_js'] = $this->load->view('arungisamudra/home_js', $this->data, TRUE);
		$this->data['foot_script'] = $this->load->view('arungisamudra/home_foot_script', $this->data, TRUE);
		$this->data['footer'] = $this->load->view('arungisamudra/home_footer', $this->data, TRUE);
		$this->data['header'] = $this->load->view('arungisamudra/home_header', $this->data, TRUE);
		$this->data['konten'] = $this->load->view('arungisamudra/home_beranda', $this->data, TRUE);
	}
	public function index()
	{
		$data = $this->data;
		$data['title'] .= " Arungi Samudra";
		$data['konten'] = $this->load->view('arungisamudra/home_beranda', $data, TRUE);
		$data['head_script'] = $this->load->view('arungisamudra/home_head_script', $data, TRUE);
		$this->load->view('template_white', $data);
	}
	public function mercusuar()
	{
		$data = $this->data;
		$data['title'] .= " Mercusuar";
		$data['konten'] = $this->load->view('page/home_mercusuar', $data, TRUE);
		$data['head_script'] = $this->load->view('arungisamudra/home_head_script', $data, TRUE);
		$this->load->view('template_mercusuar', $data);
	}
	public function bootcamp()
	{
		$data = $this->data;
		$data['title'] .= " Maritime Youth Bootcamp";
		$data['konten'] = $this->load->view('arungisamudra/home_bootcamp', $data, TRUE);
		$data['head_script'] = $this->load->view('arungisamudra/home_head_script', $data, TRUE);
		$this->load->view('template_white', $data);
	}
	public function daftar_bootcamp()
	{
		$data = $this->data;
		$data['title'] .= " Pendaftaran Maritime Youth Bootcamp";
		$data['konten'] = $this->load->view('arungisamudra/home_bootcamp_daftar', $data, TRUE);
		$data['head_script'] = $this->load->view('arungisamudra/home_head_script', $data, TRUE);
		$this->load->view('template_white', $data);
	}
	public function edutrip()
	{
		$data = $this->data;
		$data['title'] .= " Maritime Youth Edutrip";
		$data['konten'] = $this->load->view('arungisamudra/home_edutrip', $data, TRUE);
		$data['head_script'] = $this->load->view('arungisamudra/home_head_script', $data, TRUE);
		$this->load->view('template_white', $data);
	}	
	public function daftar_edutrip()
	{
		$data = $this->data;
		$data['title'] .= " Pendaftaran Maritime Youth Edutrip";
		$data['konten'] = $this->load->view('arungisamudra/home_edutrip_daftar', $data, TRUE);
		$data['head_script'] = $this->load->view('arungisamudra/home_head_script', $data, TRUE);
		$this->load->view('template_white', $data);
	}
}
