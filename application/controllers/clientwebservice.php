<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientwebservice extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    function newactor()
	{
		$client = new GuzzleHttp\Client();
        $url = 'http://localhost:8080/training_api_ci/index.php/actor/add';
		//call url page web service api 
		$data = [
			'form_params' => ['first_name' => 'M.Faiz', 'last_name' => 'M.Arif']
		];
        $res = $client->request('POST', $url, $data);
        
	}
}
