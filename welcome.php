<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		//$this->load->library('Pfunc');
		//$data['GetDateSerial'] =  'test';

		//echo $this->Pfunc->GetDateSerial();

		//$this->load->library('someclass');
		$this->load->library('generates');
		$convertreplace = $this->convertreplace;
		$filename = $convertreplace->GetDateSerial();
		//echo $convertreplace->FormatDate('2013/6/6');

		//$this->generates->Snapshot('http://www.iifun.com.tw',$filename,1280,1024);
		//$this->generates->Thumbnail('./images/9789862767191.jpg',100,100);

		$this->load->view('welcome_message.php');

		print_r($this->input->get());
	}

	public function Site($SiteName)
	{
		echo $SiteName;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */