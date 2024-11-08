<?php
class Todo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_in') != TRUE)  {
            redirect('auth/login');
            // redirect ke halaman login
        }
        $this->load->model('todo_model');
    }
    function index(){
        $user_id = $this->session->userdata('user_id');
        $data['todos'] = $this->todo_model->get_all($user_id); 
        $this->load->view('todo/index',$data);     
    }

    function add(){
        if ($this->input->post()) {
            $payload = [
                'user_id' => $this->session->userdata('user_id'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
            ];

            if($this->todo_model->add_todo($payload)){
                $this->session->set_flashdata('success','Todo berhasil ditambahkan');
                redirect('todo');
            }else{
                $this->session->set_flashdata('error','Gagal menambahkan todo');
                redirect('todo/add');
            }
        }
        $this->load->view('todo/add');
    }
}