<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mercusuar extends CI_Controller {

    public function index() {
        $url = current_url();
        if (strpos($url, '/arungisamudra') !== false) {
            redirect('arungisamudra/mercusuar');
        } else {
            redirect('home/mercusuar');
        }
    }
}
