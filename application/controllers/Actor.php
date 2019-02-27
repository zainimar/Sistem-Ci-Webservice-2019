<?php

class Actor extends CI_Controller
{
    public function index()
    {
        $this->load->model('actor_model');
        $rows = $this->actor_model->listing();
        // foreach ($rows as $actor) {
        //     echo $actor['first_name'] .'<br>';
        // }

        //nak kuarkan data dlm bentuk json
        header('Content-Type:application/json');    
        echo json_encode($rows);
    }

    public function add()
    {
        $this->load->model('actor_model');

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        $this->actor_model->insert([
            'first_name' => $first_name,
            'last_name' => $last_name
            ]);
            echo "Actor Successfully Added";
    }
}