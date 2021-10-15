<?php

class Auth extends CI_Controller{

    public function register(){

        $this->load->library('form_validation');

        $this->form_validation->set_message('is_unique', 'Email address already exist, please try another.');
        $this->form_validation->set_message('is_unique', 'Phone number already exist, please try another.');

        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required|is_unique[users.phone]');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if($this->form_validation->run() == false) {
            // Here we will load our view
            $this->load->view('register');
        } else {

            // Here we will save user record in db

            $this->load->model('Auth_model');
            $formArray = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'password' => md5($this->input->post('password')),
            'created_at' => date('Y-m-d H:i:s')
            );
            // $formArray['updated_at'] = date('Y-m-d H:i:s');
            $this->Auth_model->create($formArray);

            $this->session->set_flashdata('msg', 'Your account has been created successfully.');
            redirect(base_url().'index.php/Auth/register');

        }      
        
    }
}