<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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

    public function print_head_slide(){
        $this->load->helper('url');
        $this->load->view('head');
        $this->load->view('menu');
        $this->load->view('slide');
    }
    public function print_head(){
        $this->load->helper('url');
        $this->load->view('head');
        $this->load->view('menu');
    }
    public function print_foot(){
        $this->load->view('footer');
        $this->load->view('foot');
    }
    
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('menu');
		$this->load->view('slide');
		$this->load->view('content');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	public function history(){
	    $this->print_head();
	    $this->load->view('main/history');
	    $this->print_foot();
	}
	public function philosophy(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	public function Identities(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	
	public function undergraduate(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	
	public function graduate(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	
	public function new_student(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	public function student(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	public function old_student(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	
	public function register(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
}
