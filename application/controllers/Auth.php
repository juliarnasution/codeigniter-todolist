<?php

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function login(){
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password =  $this->input->post('password');

            $user = $this->user_model->user_login($username, $password);
            if ($user) {
                $user_session = [
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'logged_in' => true
                ];
                $this->session->set_userdata($user_session);
                redirect('todo');
            }else{
                $this->session->set_flashdata('error','Username atau password anda salah');
                redirect('auth/login');
            }
        }
        $this->load->view('auth/login');
    }

    function register(){
        if ($this->input->post()) {
            $payload = [
                'username' => $this->input->post('username'),
                'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];

            if($this->user_model->user_register($payload)){
                $this->session->set_flashdata('success','User berhasil registrasi');
                redirect('auth/login');
            }else{
                $this->session->set_flashdata('error','Gagal membuat akun');
                redirect('auth/register');
            }
        }

        $this->load->view('auth/register');
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}