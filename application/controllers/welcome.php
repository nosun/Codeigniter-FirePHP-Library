<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        
        // load firePHP library
        $this->load->library('fbug');
        
        // log message from here
        $data = array(
            'fullname' => 'Samik Chattopadhyay',
            'address' => 'Salt Lake',
            'city' => 'Kolkata',
            'PIN' => '700067'
        );
        $this->fbug->log($data);
        
        // other examples
        $this->fbug->log('Log the value of any type of variables');
        $this->fbug->info('Display information using this method');
        $this->fbug->warn('Display warning information using this method');
        $this->fbug->error('Display error message using this method');
        
        
        $this->load->view('welcome_message');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */