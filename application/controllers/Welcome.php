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
		$data['main_content'] = 'welcome_message';
        $data['where'] = 'home';
		$this->load->view('templates/main/main_template',$data);
	}
    
	public function contact(){
		$this->load->library('email');

 		$config['mailtype'] = 'html';
 		$config['priority'] = '1';
 		$config['wordwrap'] = TRUE;

 		$this->email->initialize($config);

 		$this->email->from($this->input->post('email'), ucfirst($this->input->post('name')));
 		$this->email->to('info@hackforcommunity.org');
 		//$this->email->cc('mari.robinson@webdmg.com');
 		$this->email->bcc('info@hackforcommunity.org');

 		$this->email->subject('Contact from '.ucfirst($this->input->post('name')));
 		$this->email->message(
 		"<table>
 		<tr>
 			<td>Name</td>
 			<td>".$this->input->post('name')."</td>
 		</tr>
 		 <tr>
 			<td>Email</td>
 			<td>".$this->input->post('email')."</td>
 		</tr>
 		 <tr>
 			<td>Message</td>
 			<td>".$this->input->post('message')."</td>
 		</tr>
 		</table>"
 		);

 		$this->email->send();

		$data['main_content'] = 'welcome_message';
		$this->load->view('templates/main/main_template',$data);
 		//echo $this->email->print_debugger();

	}
}
